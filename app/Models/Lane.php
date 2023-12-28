<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
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

    public function sports(): BelongsToMany
    {
        return $this->belongsToMany(Sport::class, 'lane_sports');
    }

    public function laneSports(): HasMany
    {
        return $this->hasMany(LaneSport::class);
    }

    public function laneStatuses(): HasMany
    {
        return $this->hasMany(LaneStatus::class);
    }
}
