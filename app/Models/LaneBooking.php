<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class LaneBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'sport_id',
        'slot_id',
        'customer_id',
        'name',
        'contact_number',
        'advance_amount',
        'total_amount',
        'refund_amount',
        'amount_status',
        'start_date_time',
        'end_date_time',
        'status',
        'session_id',
    ];

    protected $casts = [
        'start_date_time' => 'datetime:Y/m/d H:i:s',
        'end_date_time' => 'datetime:Y/m/d H:i:s',
    ];

    public function lanes(): BelongsToMany
    {
        return $this->belongsToMany(Lane::class);
    }

    public function sport(): BelongsTo
    {
        return $this->belongsTo(Sport::class);
    }

    public function slot(): BelongsTo
    {
        return $this->belongsTo(Slot::class);
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
