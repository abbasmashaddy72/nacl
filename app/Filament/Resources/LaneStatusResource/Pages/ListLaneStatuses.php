<?php

namespace App\Filament\Resources\LaneStatusResource\Pages;

use App\Filament\Resources\LaneStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLaneStatuses extends ListRecords
{
    protected static string $resource = LaneStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
