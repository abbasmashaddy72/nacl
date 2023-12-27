<?php

namespace Database\Factories;

use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => fake()->unique()->numberBetween(100000, 999999),
            'total_price' => fake()->randomFloat(2, 100, 1000),
            'shipping_price' => fake()->randomFloat(2, 0, 100),
            'status' => fake()->randomElement(OrderStatus::values()),
            'notes' => fake()->paragraph,
        ];
    }
}
