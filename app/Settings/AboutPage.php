<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class AboutPage extends Settings
{
    public ?string $aboutUsBreadcrumbImage;
    public ?string $aboutUsImage;
    public ?string $aboutUsTitle;
    public ?string $aboutUsMessage;
    public ?string $aboutUsButtonLabel;
    public ?string $aboutUsButtonURL;
    public ?bool $enableAboutUsSponsorSection;
    public ?string $aboutUsKeyFeatureTitle;
    public ?string $aboutUsKeyFeatureMessage;
    public ?string $aboutUsKeyFeaturePoints;
    public ?string $aboutUsVideoImage;
    public ?string $aboutUsVideoURL;
    public ?string $aboutUsTeamSectionTitle;
    public ?string $aboutUsTeamSectionMessage;
    public ?bool $enableAboutUsTeamTestimonialSection;
    public ?bool $enableAboutUsCTASection;

    public static function group(): string
    {
        return 'general';
    }
}
