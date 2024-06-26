<x-app-layout>
    <form method="POST" action="{{ route('login') }}" class="w-[400px] mx-auto p-6 my-8 bg-white rounded-lg">
        <h2 class="text-2xl font-semibold text-center mb-5">
            Login to your account
        </h2>
        <p class="text-center text-gray-500 mb-6">
            or
            <a
                href="{{ route('register') }}"
                class="text-sm text-blue-700 hover:text-blue-600"
            >
                create new account
            </a>
        </p>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        @csrf
        <div class="mb-4">
            <x-input type="email" name="email" placeholder="Your email address" :value="old('email')"/>
        </div>
        <div class="mb-4">
            <x-input type="password" name="password" placeholder="Your password" :value="old('password')" />
        </div>
        <div class="flex justify-between items-center mb-5">
            <div class="flex items-center">
            </div>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-sm text-blue-700 hover:text-blue-600">
                    Forgot Password?
                </a>
            @endif
        </div>
        <button
            class="btn-primary bg-blue-500 hover:bg-blue-600 active:bg-blue-700 w-full"
        >
            Login
        </button>
    </form>
</x-app-layout>
