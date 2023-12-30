<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sport>
 */
class SportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->company(),
            'slug' => fake()->slug(2),
            'max_lane' => fake()->randomElement([0, 1, 2, 3]),
            'short_description' => fake()->realText(),
            'images' => json_encode(['image1.jpg', 'image2.jpg', 'image3.jpg']),
            'description' => fake()->realText(),
        ];
    }
}
