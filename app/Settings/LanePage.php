<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class LanePage extends Settings
{
    public ?string $laneBreadcrumbImage;
    public ?bool $enableFeatureSection;
    public ?bool $enableFAQSection;
    public ?bool $enableLaneCTASection;

    public static function group(): string
    {
        return 'general';
    }
}
