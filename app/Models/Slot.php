<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Slot extends Model
{
    use HasFactory;

    protected $fillable = [
        'sport_id',
        'min_players',
        'max_players',
        'base_price',
        'base_time',
        'weekend_amount_percentage',
        'per_player_percentage',
        'start_time',
        'end_time',
        'slot_minutes',
    ];

    protected $casts = [
        'start_time' => 'datetime:H:i:s',
        'end_time' => 'datetime:H:i:s',
    ];

    public function sport(): BelongsTo
    {
        return $this->belongsTo(Sport::class);
    }

    public function lanes(): BelongsToMany
    {
        return $this->belongsToMany(Lane::class);
    }
}
