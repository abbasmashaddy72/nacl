<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Navigation extends Model
{
    use HasFactory;

    protected $casts = [
        'items' => 'json',
    ];

    public static function fromHandle(string $handle): Builder | Model | null
    {
        return static::query()->firstWhere('handle', $handle);
    }
}
