<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ShopPage extends Settings
{
    public ?string $shopBreadcrumbImage;
    public ?bool $enableShopAppSection;
    public ?string $shopAppTitle;
    public ?string $shopAppMessage;
    public ?string $shopAppAppStoreURL;
    public ?string $shopAppGoogleStoreURL;
    public ?bool $enableShopCTASection;

    public static function group(): string
    {
        return 'general';
    }
}
