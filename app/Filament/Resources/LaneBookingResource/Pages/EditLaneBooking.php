<?php

namespace App\Filament\Resources\LaneBookingResource\Pages;

use App\Filament\Resources\LaneBookingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaneBooking extends EditRecord
{
    protected static string $resource = LaneBookingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
