<?php

namespace Database\Factories;

use App\Models\Lane;
use App\Models\Sport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LaneSport>
 */
class LaneSportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startTime = fake()->time();
        $endTime = fake()->time();

        // Ensure start_time is less than end_time
        while (strtotime($startTime) >= strtotime($endTime)) {
            $startTime = fake()->time();
            $endTime = fake()->time();
        }

        return [
            'lane_id' => fake()->randomElement(Lane::get()->pluck('id')->toArray()),
            'sport_id' => fake()->randomElement(Sport::get()->pluck('id')->toArray()),
            'min_players' => 2,
            'max_players' => rand(7, 12),
            'charges_rate' => rand(10, 50),
            'charge_minutes' => fake()->randomElement([30, 45, 60]),
            'weekend_amount_percentage' => rand(10, 30),
            'per_player_percentage' => rand(10, 30),
            'start_time' => $startTime,
            'end_time' => $endTime,
            'slot_minutes' => fake()->randomElement([30, 45, 60]),
        ];
    }
}
