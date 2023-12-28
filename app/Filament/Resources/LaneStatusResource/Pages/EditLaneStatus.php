<?php

namespace App\Filament\Resources\LaneStatusResource\Pages;

use App\Filament\Resources\LaneStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaneStatus extends EditRecord
{
    protected static string $resource = LaneStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
