<?php

namespace Database\Factories;

use App\Enums\ProductType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word,
            'slug' => fake()->slug,
            'sku' => fake()->unique()->numberBetween(100000, 999999),
            'image_url' => fake()->imageUrl(),
            'description' => fake()->paragraph,
            'quantity' => fake()->numberBetween(1, 100),
            'price' => fake()->randomFloat(2, 100, 1000),
            'is_visible' => fake()->boolean,
            'is_featured' => fake()->boolean,
            'type' => fake()->randomElement(ProductType::values()),
            'published_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
