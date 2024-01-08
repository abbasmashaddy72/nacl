<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class CommonSettings extends Settings
{
    public ?string $lightLogo;
    public ?string $darkLogo;
    public ?string $favicon;
    public ?string $companyShortDescription;
    public ?string $facebook;
    public ?string $instagram;
    public ?string $linkedIn;
    public ?string $twitter;
    public ?string $youtube;
    public ?string $googleMaps;
    public ?string $CTATopTitle;
    public ?string $CTAMessage;
    public ?string $CTAButtonLabel;
    public ?string $CTAButtonURL;
    public ?string $whatsAppPhoneNumber;
    public ?string $whatsAppMessage;
    public ?bool $enableSponsorSection;
    public ?array $sponsorImages;

    public static function group(): string
    {
        return 'general';
    }
}
