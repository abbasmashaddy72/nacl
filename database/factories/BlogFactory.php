<?php

namespace Database\Factories;

use App\Models\BlogCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->randomElement(User::get()->pluck('id')->toArray()),
            'blog_category_id' => fake()->randomElement(BlogCategory::get()->pluck('id')->toArray()),
            'title' => fake()->word,
            'slug' => fake()->slug(2),
            'description' => fake()->sentence,
            'content' => fake()->sentence,
            'featured_image' => rand(1, 10),
            'published_at' => now(),
        ];
    }
}
