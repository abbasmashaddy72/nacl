<?php

namespace App\Filament\Resources\LaneSportResource\Pages;

use App\Filament\Resources\LaneSportResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaneSport extends EditRecord
{
    protected static string $resource = LaneSportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
