<?php

namespace Database\Factories;

use App\Models\Lane;
use App\Models\User;
use App\Models\Sport;
use App\Models\Customer;
use App\Models\LaneBooking;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LaneBooking>
 */
class LaneBookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $amountStatus = fake()->randomElement(['paid', 'partialPaid', 'due', 'refund', 'partialRefund']);
        $startDate = fake()->dateTimeBetween('-1 week', '+1 week');
        $endDate = fake()->dateTimeBetween($startDate, '+2 weeks');

        // Generate total_amount and advance_amount
        $totalAmount = fake()->randomFloat(2, 100, 1000); // Example range, adjust as needed
        $advanceAmount = fake()->randomFloat(2, 0, $totalAmount);

        // Generate refund_amount if status is Refund or Partial Refunded
        $refundAmount = ($amountStatus == 'Refund' || $amountStatus == 'Partial Refund') ?
            fake()->randomFloat(2, 0, $advanceAmount) : 0;

        return [
            'sport_id' => fake()->randomElement(Sport::get()->pluck('id')->toArray()),
            'customer_id' => fake()->randomElement(Customer::get()->pluck('id')->toArray()),
            'name' => fake()->name(),
            'contact_number' => rand(7777777777, 9999999999),
            'total_amount' => $totalAmount,
            'advance_amount' => $advanceAmount,
            'refund_amount' => $refundAmount,
            'amount_status' => $amountStatus,
            'start_date_time' => $startDate,
            'end_date_time' => $endDate,
            'status' => fake()->randomElement(['open', 'booked', 'closed', 'canceled']),
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterCreating(function (LaneBooking $slot) {
            // Get existing lane IDs and associate them with LaneBooking
            $laneIds = Lane::inRandomOrder()->limit(rand(1, 3))->pluck('id')->toArray();
            $slot->lanes()->attach($laneIds);
        });
    }
}
