<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Forms\Form;
use App\Settings\HomePage;
use Filament\Pages\SettingsPage;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\PathGenerators\DatePathGenerator;
use Awcodes\Curator\PathGenerators\UserPathGenerator;

class HomeManagement extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $title = 'Home Page';

    protected static string $settings = HomePage::class;

    protected static ?string $navigationGroup = 'Site Management';

    protected static ?int $navigationSort = 2;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make('Sliders')->schema([
                        Repeater::make('sliders')
                            ->schema([
                                TextInput::make('url')->required(),
                                CuratorPicker::make('image')
                                    ->label('Image')
                                    ->lazyLoad()
                                    ->listDisplay()
                                    ->constrained(true)
                                    ->visibility(true)
                                    ->required(),
                            ])->columns(2)->maxItems(5),
                    ]),
                    Forms\Components\Section::make('Hero Card 2')->schema([
                        TextInput::make('card2Title')
                            ->label('Title')
                            ->required(),

                        Textarea::make('card2Message')
                            ->label('Message')
                            ->required(),

                        TextInput::make('card2ButtonLabel')
                            ->label('Button Label')
                            ->required(),

                        TextInput::make('card2ButtonURL')
                            ->label('Button URL')
                            ->required(),

                        TextInput::make('card2YoutubeId')
                            ->label('Youtube URL')
                            ->required(),
                    ])->columns(2),

                    Forms\Components\Section::make('Welcome Section')->schema([
                        Forms\Components\Group::make()->schema([
                            TextInput::make('welcomeTitle')
                                ->label('Title')
                                ->required(),

                            CuratorPicker::make('welcomeImage')
                                ->label('Image')
                                ->lazyLoad()
                                ->listDisplay()
                                ->constrained(true)
                                ->visibility(true)
                                ->required(),
                        ]),
                        Textarea::make('welcomeMessage')
                            ->label('Message')
                            ->required(),
                    ])->columns(2),

                    Forms\Components\Section::make('Shop Section')->schema([
                        TextInput::make('shopSectionTitle')
                            ->label('Title')
                            ->required(),

                        Textarea::make('shopSectionMessage')
                            ->label('Message')
                            ->required(),
                    ])->columns(2),
                ]),

                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make('Video Recording Section')->schema([
                        Forms\Components\Group::make()->schema([
                            TextInput::make('videoRecordingTitle')
                                ->label('Title')
                                ->required(),

                            CuratorPicker::make('videoRecordingImage')
                                ->label('Image')
                                ->lazyLoad()
                                ->listDisplay()
                                ->constrained(true)
                                ->visibility(true)
                                ->required(),

                        ]),
                        Textarea::make('videoRecordingMessage')
                            ->label('Message')
                            ->required(),
                        Forms\Components\Section::make('Points')->schema([
                            Repeater::make('videoRecordingPoints')
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
                                ])->columns(2)->maxItems(2),
                        ]),
                    ])->columns(2),
                ]),

            ]);
    }
}
