<?php

namespace App\Livewire\Frontend;

use App\Models\LaneBooking;
use Carbon\Carbon;
use App\Models\Slot;
use App\Models\Sport;
use App\Traits\StripePaymentTrait;
use Livewire\Component;

class BookingForm extends Component
{
    use StripePaymentTrait;

    public $sports;
    public $selectedSport;
    public $availableSlots = [];
    public $selectedSlot;
    public $selectedDate;
    public $timeSlots = [];
    public $selectedTimes = [];
    public $currentPrice;
    public $numberOfPlayers;
    public $slot;
    public $typeOfUser = 'guest';
    public $name;
    public $contactNo;

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
        $this->slot = $slot = Slot::findOrFail($this->selectedSlot);
        if (!$slot) {

            return;
        }
        $start = Carbon::parse($slot->start_time);
        $end = Carbon::parse($slot->end_time);
        $this->numberOfPlayers = $this->slot->min_players;

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

    public function updatedTypeOfUser()
    {
        if ($this->typeOfUser == 'login') {
            redirect()->away(route('login'));
        }
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
        // Extract time strings, convert to timestamps, find max and min timestamps
        $timeStamps = array_map('strtotime', array_keys($this->selectedTimes));
        $maxTimestamp = max($timeStamps);
        $minTimestamp = min($timeStamps);

        $laneBooking = LaneBooking::create([
            'sport_id' => $this->selectedSport,
            'slot_id' => $this->selectedSlot,
            'customer_id' => auth()->user()->id ?? null,
            'name' => $this->name,
            'contact_number' => $this->contactNo,
            'advance_amount' => 0,
            'total_amount' => $this->currentPrice,
            'refund_amount' => 0,
            'amount_status' => 'unPaid',
            'start_date_time' => $this->selectedDate . ' ' . date("H:i:s", $minTimestamp),
            'end_date_time' => $this->selectedDate . ' ' . date("H:i:s", $maxTimestamp),
            'status' => 'open',
        ]);

        $lineItems[] = [
            'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                    'name' => 'Lane Booking',
                ],
                'unit_amount' => $this->currentPrice * 100,
            ],
            'quantity' => 1,
        ];

        $this->checkout($lineItems, 'LaneBooking', 'amount_status', $laneBooking->id);
    }
}
