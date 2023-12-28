<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class TrainingVideoPage extends Settings
{
    public ?string $trainingBreadcrumbImage;
    public ?string $flowTitle1;
    public ?string $flowMessage1;
    public ?string $flowTitle2;
    public ?string $flowMessage2;
    public ?string $flowTitle3;
    public ?string $flowMessage3;
    public ?string $descriptionSectionTitle;
    public ?string $descriptionSectionMessage;
    public ?string $descriptionSectionPoints;
    public ?string $descriptionSectionImage;
    public ?string $trainingVideoTitle;
    public ?string $trainingVideoMessage;
    public ?string $trainingVideoImages;
    public ?string $testimonialTitle;
    public ?string $testimonialMessage;
    public ?bool $enableTrainingVideoCTASection;

    public static function group(): string
    {
        return 'general';
    }
}
