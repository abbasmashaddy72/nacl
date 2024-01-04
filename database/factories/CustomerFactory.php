<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'email' => fake()->unique()->safeEmail,
            'email_verified_at' => fake()->randomElement([now(), null]),
            'password' => static::$password ??= Hash::make('password'),
            'phone' => fake()->phoneNumber,
            'date_of_birth' => fake()->date,
            'address' => fake()->address,
            'zip_code' => fake()->postcode,
            'city' => fake()->city,
            'remember_token' => Str::random(10),
        ];
    }
}
