<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = fake()->unique()->randomElement(User::all());
        
        $names = explode(" ", $user->name);
        $firstName = $names[0];
        $lastName = $names[1] ?? '';

        return [
            'user_id' => $user->id,
            'first_name' =>  $firstName,
            'last_name' => $lastName,
            'phone' => fake()->numerify('##########'),
            'status' => 'active'
        ];
    }
}
