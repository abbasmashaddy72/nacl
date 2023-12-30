<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Forms\Form;
use App\Settings\HomePage;
use Filament\Pages\SettingsPage;
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

                        TextInput::make('card2YoutubeURL')
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
                    Forms\Components\Section::make('Sports Section')->schema([
                        Forms\Components\Group::make()->schema([
                            TextInput::make('sportSectionTitle')
                                ->label('Title')
                                ->required(),

                            CuratorPicker::make('sportSectionImage')
                                ->label('Image')
                                ->lazyLoad()
                                ->listDisplay()
                                ->constrained(true)
                                ->visibility(true)
                                ->required(),

                        ]),
                        Textarea::make('sportSectionMessage')
                            ->label('Message')
                            ->required(),
                        Forms\Components\Section::make('Point 1')->schema([
                            Forms\Components\Group::make()->schema([
                                TextInput::make('sportSectionTitle1')
                                    ->label('Title')
                                    ->required(),

                                CuratorPicker::make('sportSectionImage1')
                                    ->label('Image')
                                    ->lazyLoad()
                                    ->listDisplay()
                                    ->constrained(true)
                                    ->visibility(true)
                                    ->required(),
                            ]),
                            Textarea::make('sportSectionMessage1')
                                ->label('Message')
                                ->required(),
                        ])->columns(2),

                        Forms\Components\Section::make('Point 2')->schema([
                            Forms\Components\Group::make()->schema([
                                TextInput::make('sportSectionTitle2')
                                    ->label('Title')
                                    ->required(),

                                CuratorPicker::make('sportSectionImage2')
                                    ->label('Image')
                                    ->lazyLoad()
                                    ->listDisplay()
                                    ->constrained(true)
                                    ->visibility(true)
                                    ->required(),
                            ]),
                            Textarea::make('sportSectionMessage2')
                                ->label('Message')
                                ->required(),
                        ])->columns(2),
                    ])->columns(2),
                ]),

            ]);
    }
}
