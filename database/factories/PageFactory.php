<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $paragraphs = fake()->paragraphs(6, false);
        $title = fake()->realText(50);
        $content = "<h1>{$title}</h1>";
        foreach ($paragraphs as $para); {
            $content .= "<p>{$para}</p>";
        }
        return [
            'user_id' => fake()->randomElement(User::get()->pluck('id')->toArray()),
            'title' => fake()->word,
            'slug' => fake()->slug(2),
            'description' => fake()->realText(),
            'content' => $content,
            'featured_image' => rand(1, 10),
            'published_at' => now(),
        ];
    }
}
