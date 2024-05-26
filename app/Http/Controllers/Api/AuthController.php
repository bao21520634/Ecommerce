<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Laravel\Passport\RefreshTokenRepository;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
            'remember_me' => 'boolean'
        ]);
        $credentials = request(['email', 'password']);
        $remember = $credentials['remember_me'] ?? false;
        unset($credentials['remember_me']);
        if (!Auth::attempt($credentials, $remember)) {
            return response([
                'message' => 'Email or password is incorrect'
            ], 422);
        }

        /** @var \App\Models\User $user */
        $user = $request->user();
        if (!$user->is_admin) {
            Auth::logout();
            return response([
                'message' => 'You don\'t have permission to authenticate as admin'
            ], 403);
        }
        if (!$user->email_verified_at) {
            Auth::logout();
            return response([
                'message' => 'Your email address is not verified'
            ], 403);
        }

        $req = Request::create('oauth/token', 'POST', [
            "grant_type" => "password",
            "client_id" => config('passport.password_grant_client.id'),
            "client_secret" => config('passport.password_grant_client.secret'),
            "username"=> $request->email,
            "password"=> $request->password,
            "scope" => ""
        ]);

        $res = app()->handle($req);
        $tokenResult = json_decode($res->getContent());

        return response([
            'user' => new UserResource($user),
            'access_token' => $tokenResult->access_token,
            'refresh_token' => $tokenResult->refresh_token,
            'token_type' => 'Bearer',
            'expires_in' => Carbon::parse(
                $tokenResult->expires_in
            )->toDateTimeString()
        ]);
    }

    public function logout(Request $request)
    {
        /** @var \App\Models\User $user */
        $token = $request->user()->token();

        /* --------------------------- revoke access token -------------------------- */
        $token->revoke();
        $token->delete();

        /* -------------------------- revoke refresh token -------------------------- */
        $refreshTokenRepository = app(RefreshTokenRepository::class);
        $refreshTokenRepository->revokeRefreshTokensByAccessTokenId($token->id);

        return response('', 204);
    }

    public function getUser(Request $request)
    {
        return new UserResource($request->user());
    }

    /* -------------------------- refresh access_token -------------------------- */
    public function refreshToken(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'refresh_token' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $response = Request::create('oauth/token', 'POST', [
            "grant_type" => "refresh_token",
            "client_id" => config('passport.password_grant_client.id'),
            "client_secret" => config('passport.password_grant_client.secret'),
            "refresh_token" => $request->refresh_token,
            "scope" => ""
        ]);

        return response($response);
    }
}
