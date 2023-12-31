<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class HomePage extends Settings
{
    public ?array $sliders;
    public ?string $card2Title;
    public ?string $card2Message;
    public ?string $card2ButtonLabel;
    public ?string $card2ButtonURL;
    public ?string $card2YoutubeId;

    public ?string $welcomeTitle;
    public ?string $welcomeMessage;
    public ?string $welcomeImage;

    public ?string $videoRecordingTitle;
    public ?string $videoRecordingMessage;
    public ?int $videoRecordingImage;
    // Repeating Data
    public ?array $videoRecordingPoints;

    public ?string $shopSectionTitle;
    public ?string $shopSectionMessage;

    public static function group(): string
    {
        return 'general';
    }
}
