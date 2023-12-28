<?php

namespace App\Filament\Resources\NavigationResource\Pages;

use App\Filament\Resources\NavigationResource;
use Filament\Resources\Pages\EditRecord;

class EditNavigation extends EditRecord
{
    use \App\Filament\Resources\NavigationResource\HandlesNavigationBuilder;

    protected static string $resource = NavigationResource::class;
}
