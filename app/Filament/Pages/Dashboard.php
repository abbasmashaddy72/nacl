<?php

namespace App\Filament\Pages;

use Filament\Panel;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;

class Dashboard extends \Filament\Pages\Dashboard
{
    use HasFiltersForm;

    public function panel(Panel $panel): Panel
    {
        return $panel
            ->pages([])
            ->widgets([]);
    }
}
