<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LaneStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'lane_id',
        'user_id',
        'name',
        'contact_number',
        'advance_amount',
        'total_amount',
        'refund_amount',
        'amount_status',
        'start_date_time',
        'end_date_time',
        'status',
    ];

    public function lane(): BelongsTo
    {
        return $this->belongsTo(Lane::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
