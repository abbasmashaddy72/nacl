<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ContactUsPage extends Settings
{
    public ?string $contactUsBreadcrumbImage;
    public ?string $contactUsPhoneMessage;
    public ?string $contactUsPhoneNo;
    public ?string $contactUsEmailMessage;
    public ?string $contactUsEmail;
    public ?string $contactUsLocationMessage;
    public ?string $contactUsMapLink;
    public ?bool $enableMapSection;

    public static function group(): string
    {
        return 'general';
    }
}
