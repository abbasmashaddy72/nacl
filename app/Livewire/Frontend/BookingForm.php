<?php

namespace App\Livewire\Frontend;

use Carbon\Carbon;
use Stripe\Stripe;
use App\Models\Slot;
use App\Models\Sport;
use Livewire\Component;
use Stripe\Checkout\Session;

class BookingForm extends Component
{
    public $sports;
    public $selectedSport;
    public $availableSlots = [];
    public $selectedSlot;
    public $selectedDate;
    public $timeSlots = [];
    public $selectedTimes = [];
    public $currentPrice;
    public $numberOfPlayers;

    public function render()
    {
        $this->sports = Sport::get();

        return view('livewire.frontend.booking-form');
    }

    public function updateLane()
    {
        if (!empty($this->selectedSport)) {
            $this->availableSlots = Slot::where('sport_id', $this->selectedSport)->with('lanes')->get();
        }
    }

    public function generateSlots()
    {
        $this->timeSlots = [];
        $this->updatePrice();

        if (empty($this->selectedSlot)) {
            return;
        }
        $slot = Slot::findOrFail($this->selectedSlot);
        if (!$slot) {

            return;
        }
        $start = Carbon::parse($slot->start_time);
        $end = Carbon::parse($slot->end_time);

        while ($start->lt($end)) {
            $this->timeSlots[] = $start->format('h:i A'); // 'h' for 12-hour format, 'i' for minutes, 'A' for AM/PM
            $start->addMinutes($slot->slot_minutes);
        }
    }

    public function updatedSelectedTimes($value)
    {
        // Handle the logic when selectedTimes array is updated
        $this->selectMiddleSlots();
    }

    public function selectMiddleSlots()
    {
        $selectedTimes = array_keys(array_filter($this->selectedTimes));

        if (count($selectedTimes) < 2) {

            $this->updatePrice();
            return;
        }
        $start = min(array_map([$this, 'convertToMinutes'], $selectedTimes));
        $end = max(array_map([$this, 'convertToMinutes'], $selectedTimes));

        // Set all times between start and end to true
        for ($i = $start + 1; $i < $end; $i++) {
            $time = $this->convertToTime($i);

            // Check if the time is in the original timeSlots array
            if (in_array($time, $this->timeSlots)) {
                $this->selectedTimes[$time] = true;
            }
        }


        $this->updatePrice();
    }

    public function convertToMinutes($time)
    {
        $carbon = Carbon::parse($time);
        return $carbon->hour * 60 + $carbon->minute;
    }

    public function convertToTime($minutes)
    {
        return Carbon::createFromTime(floor($minutes / 60), $minutes % 60)->format('h:i A');
    }

    public function updatePrice()
    {
        $currentSlot = Slot::findOrFail($this->selectedSlot);

        $basePrice = $currentSlot->base_price;
        $perPlayerPercentage = $currentSlot->per_player_percentage;
        $minPlayers = $currentSlot->min_players;
        $noOfPlayers = $this->numberOfPlayers;
        $selectedTrueCount = count(array_filter($this->selectedTimes));

        // Check if the noOfPlayers is greater than or equal to the minPlayers
        if ($noOfPlayers > $minPlayers) {
            // Apply the per_player_percentage
            $this->currentPrice = $selectedTrueCount * $basePrice * (1 + $perPlayerPercentage / 100) * ($noOfPlayers - $minPlayers);
        } else {
            // Don't apply the per_player_percentage
            $this->currentPrice = $selectedTrueCount * $basePrice;
        }
    }

    public function submitForm()
    {

        Stripe::setApiKey(config('stripe.stripe_secret_key'));

        $checkout_session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'T-shirt',
                    ],
                    'unit_amount' => $this->currentPrice * 100,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('stripe.success'),
            'cancel_url' => route('stripe.cancel'),
        ]);

        return redirect()->away($checkout_session->url);
    }
}
