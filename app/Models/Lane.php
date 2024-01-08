<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Lane extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'images',
        'description',
    ];

    protected $casts = [
        'images' => 'array'
    ];

    public function slots(): BelongsToMany
    {
        return $this->belongsToMany(Slot::class);
    }

    public function laneBookings(): BelongsToMany
    {
        return $this->belongsToMany(LaneBooking::class);
    }
}
