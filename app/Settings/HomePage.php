<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class HomePage extends Settings
{
    public ?string $card2Title;
    public ?string $card2Message;
    public ?string $card2ButtonLabel;
    public ?string $card2ButtonURL;
    public ?string $card2YoutubeURL;

    public ?string $welcomeTitle;
    public ?string $welcomeMessage;
    public ?string $welcomeImage;

    public ?string $sportSectionTitle;
    public ?string $sportSectionMessage;
    public ?int $sportSectionImage;
    // Repeating Data
    public ?string $sportSectionTitle1;
    public ?string $sportSectionMessage1;
    public ?int $sportSectionImage1;
    public ?string $sportSectionTitle2;
    public ?string $sportSectionMessage2;
    public ?int $sportSectionImage2;

    public ?string $shopSectionTitle;
    public ?string $shopSectionMessage;

    public ?string $enableSponsorSection;
    public ?array $sponsorImages;

    public static function group(): string
    {
        return 'general';
    }
}
