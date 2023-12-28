<?php

namespace App\Filament\Resources\LaneSportResource\Pages;

use App\Filament\Resources\LaneSportResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaneSports extends ListRecords
{
    protected static string $resource = LaneSportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
