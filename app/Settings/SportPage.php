<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SportPage extends Settings
{
    public ?string $sportBreadcrumbImage;
    public ?bool $enableSportCTASection;

    public static function group(): string
    {
        return 'general';
    }
}
