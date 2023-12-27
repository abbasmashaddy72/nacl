<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public ?string $copyright;
    public ?string $label;
    public ?string $url;

    public static function group(): string
    {
        return 'general';
    }
}
