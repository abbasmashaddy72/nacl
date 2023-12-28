<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LaneSport extends Model
{
    use HasFactory;

    protected $fillable = [
        'lane_id',
        'sport_id',
        'min_players',
        'max_players',
        'charges_rate',
        'charge_minutes',
        'weekend_amount_percentage',
        'per_player_percentage',
        'start_time',
        'end_time',
        'slot_minutes',
    ];

    protected $casts = [
        'start_time' => 'timestamp',
        'end_time' => 'timestamp',
    ];

    public function lane(): BelongsTo
    {
        return $this->belongsTo(Lane::class);
    }

    public function sport(): BelongsTo
    {
        return $this->belongsTo(Sport::class);
    }
}
