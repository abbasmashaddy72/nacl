<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class LanePage extends Settings
{
    public ?int $laneBreadcrumbImage;
    public ?bool $enableFeatureSection;
    public ?bool $enableFAQSection;
    public ?bool $enableLaneCTASection;
    public ?array $laneFeatures;

    public static function group(): string
    {
        return 'general';
    }
}
