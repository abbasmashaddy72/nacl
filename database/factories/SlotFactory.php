<?php

namespace Database\Factories;

use App\Models\Lane;
use App\Models\Slot;
use App\Models\Sport;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slot>
 */
class SlotFactory extends Factory
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

        $time = fake()->randomElement([30, 45, 60]);

        return [
            'sport_id' => fake()->randomElement(Sport::get()->pluck('id')->toArray()),
            'min_players' => 2,
            'max_players' => rand(7, 12),
            'base_price' => rand(10, 50),
            'base_time' => $time,
            'weekend_amount_percentage' => rand(10, 30),
            'per_player_percentage' => rand(10, 30),
            'start_time' => $startTime,
            'end_time' => $endTime,
            'slot_minutes' => $time,
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterCreating(function (Slot $slot) {
            $lanes = Lane::inRandomOrder()->limit(rand(1, 3))->pluck('id')->toArray();
            $slot->lanes()->sync($lanes);
        });
    }
}
