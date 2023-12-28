<?php

namespace App\Filament\Resources\NavigationResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\NavigationResource;

class CreateNavigation extends CreateRecord
{
    use \App\Filament\Resources\NavigationResource\HandlesNavigationBuilder;

    protected static string $resource = NavigationResource::class;
}
