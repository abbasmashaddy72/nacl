<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class CommonSettings extends Settings
{
    public ?string $lightLogo;
    public ?string $darkLogo;
    public ?string $favicon;
    public ?string $facebook;
    public ?string $instagram;
    public ?string $linkedIn;
    public ?string $twitter;
    public ?string $youtube;
    public ?string $googleMaps;
    public ?string $CTATopTitle;
    public ?string $CTAHeading;
    public ?string $CTAMessage;
    public ?string $CTAButtonLabel;
    public ?string $CTAButtonURL;

    public static function group(): string
    {
        return 'general';
    }
}
