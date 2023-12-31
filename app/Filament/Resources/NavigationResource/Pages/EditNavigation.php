<?php

namespace App\Filament\Resources\NavigationResource\Pages;

use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\NavigationResource;
use App\Filament\Resources\NavigationResource\Pages\Concerns\HandlesNavigationBuilder;

class EditNavigation extends EditRecord
{
    use HandlesNavigationBuilder;

    protected static string $resource = NavigationResource::class;
}
