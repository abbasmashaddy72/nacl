<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class CommonSettings extends Settings
{
    public static function group(): string
    {
        return 'general';
    }
}
