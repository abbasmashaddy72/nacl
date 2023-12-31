<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lane>
 */
class LaneFactory extends Factory
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
            'short_description' => fake()->realText(),
            'images' => array_map(fn () => rand(1, 10), range(1, rand(2, 5))),
            'description' => fake()->realText(),
        ];
    }
}
