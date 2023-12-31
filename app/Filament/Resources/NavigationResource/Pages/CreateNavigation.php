<?php

namespace App\Filament\Resources\NavigationResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\NavigationResource;
use App\Filament\Resources\NavigationResource\Pages\Concerns\HandlesNavigationBuilder;

class CreateNavigation extends CreateRecord
{
    use HandlesNavigationBuilder;

    protected static string $resource = NavigationResource::class;
}
