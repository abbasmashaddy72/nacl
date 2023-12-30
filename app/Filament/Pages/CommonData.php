<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Forms\Form;
use App\Settings\CommonSettings;
use Filament\Pages\SettingsPage;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Awcodes\Curator\Components\Forms\CuratorPicker;

class CommonData extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = CommonSettings::class;

    protected static ?string $navigationGroup = 'Site Management';

    protected static ?int $navigationSort = 1;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make('Images')->schema([
                        CuratorPicker::make('lightLogo')
                            ->label('Light Logo')
                            ->lazyLoad()
                            ->listDisplay()
                            ->constrained(true)
                            ->visibility(true)
                            ->required(),
                        CuratorPicker::make('darkLogo')
                            ->label('Dark Logo')
                            ->lazyLoad()
                            ->listDisplay()
                            ->constrained(true)
                            ->visibility(true)
                            ->required(),
                        CuratorPicker::make('favicon')
                            ->label('Favicon')
                            ->lazyLoad()
                            ->listDisplay()
                            ->constrained(true)
                            ->visibility(true)
                            ->required(),
                    ])->columns(3),

                    Forms\Components\Section::make('Call to Action')->schema([
                        TextInput::make('CTATopTitle')
                            ->label('Top Title')
                            ->required(),
                        TextInput::make('CTAHeading')
                            ->label('Heading')
                            ->required(),
                        Textarea::make('CTAMessage')
                            ->label('Message')
                            ->required(),
                        Forms\Components\Group::make()->schema([
                            TextInput::make('CTAButtonLabel')
                                ->label('Button Label')
                                ->required(),
                            TextInput::make('CTAButtonURL')
                                ->label('Button URL')
                                ->required(),
                        ])->columnSpanFull()->columns(2),
                    ])->columns(2),
                ]),
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make('Social Media Profile Links')->schema([
                        TextInput::make('facebook')
                            ->label('Facebook')
                            ->required(),
                        TextInput::make('instagram')
                            ->label('Instagram')
                            ->required(),
                        TextInput::make('linkedIn')
                            ->label('LinkedIn')
                            ->required(),
                        TextInput::make('twitter')
                            ->label('Twitter')
                            ->required(),
                        TextInput::make('youtube')
                            ->label('Youtube')
                            ->required(),
                        TextInput::make('googleMaps')
                            ->label('Google Maps')
                            ->required(),
                    ])->columns(2),
                ]),
            ]);
    }
}
