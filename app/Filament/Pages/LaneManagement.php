<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Forms\Form;
use App\Settings\LanePage;
use Filament\Pages\SettingsPage;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Awcodes\Curator\Components\Forms\CuratorPicker;

class LaneManagement extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-bars-4';

    protected static ?string $title = 'Lane Page';

    protected static string $settings = LanePage::class;

    protected static ?string $navigationGroup = 'Site Management';

    protected static ?int $navigationSort = 3;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()->schema([
                    CuratorPicker::make('laneBreadcrumbImage')
                        ->label('Breadcrumb Image')
                        ->lazyLoad()
                        ->listDisplay()
                        ->constrained(true)
                        ->visibility(true)
                        ->required(),

                    Toggle::make('enableFeatureSection')
                        ->label('Enable Feature Section')
                        ->required(),

                    Toggle::make('enableFAQSection')
                        ->label('Enable FAQ Section')
                        ->required(),

                    Toggle::make('enableLaneCTASection')
                        ->label('Enable CTA Section')
                        ->required(),
                    Forms\Components\Section::make('Features')->schema([
                        Repeater::make('laneFeatures')
                            ->schema([
                                Forms\Components\Group::make()->schema([
                                    TextInput::make('title')
                                        ->label('Title')
                                        ->required(),

                                    CuratorPicker::make('image')
                                        ->label('Image')
                                        ->lazyLoad()
                                        ->listDisplay()
                                        ->constrained(true)
                                        ->visibility(true)
                                        ->required(),
                                ]),
                                Textarea::make('message')
                                    ->label('Message')
                                    ->required(),
                            ])->columns(2),
                    ]),
                ])->columns(4),
            ]);
    }
}
