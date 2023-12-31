<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sport extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'max_lane',
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
}
