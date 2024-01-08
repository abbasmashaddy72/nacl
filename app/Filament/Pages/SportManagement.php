<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Forms\Form;
use App\Settings\SportPage;
use Filament\Pages\SettingsPage;
use Filament\Forms\Components\Toggle;
use Awcodes\Curator\Components\Forms\CuratorPicker;

class SportManagement extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cube-transparent';

    protected static ?string $title = 'Sports Page';

    protected static string $settings = SportPage::class;

    protected static ?string $navigationGroup = 'Site Management';

    protected static ?int $navigationSort = 4;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()->schema([
                    CuratorPicker::make('sportBreadcrumbImage')
                        ->label('Breadcrumb Image')
                        ->lazyLoad()
                        ->listDisplay()
                        ->constrained(true)
                        ->visibility(true)
                        ->required(),

                    Toggle::make('enableSportCTASection')
                        ->label('Enable CTA Section')
                        ->required(),
                ])->columns(2),
            ]);
    }
}
