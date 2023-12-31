<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class TrainingVideoPage extends Settings
{
    public ?string $trainingBreadcrumbImage;
    public ?array $trainingFlow;
    public ?string $descriptionSectionTitle;
    public ?string $descriptionSectionMessage;
    public ?array $descriptionSectionPoints;
    public ?string $descriptionSectionImage;
    public ?string $trainingVideoTitle;
    public ?string $trainingVideoMessage;
    public ?array $trainingVideoImages;
    public ?string $testimonialTitle;
    public ?string $testimonialMessage;
    public ?bool $enableTrainingVideoCTASection;

    public static function group(): string
    {
        return 'general';
    }
}
