<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Forms\Form;
use App\Settings\AboutPage;
use Filament\Pages\SettingsPage;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Awcodes\Curator\Components\Forms\CuratorPicker;

class AboutManagement extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-squares-plus';

    protected static ?string $title = 'About Us Page';

    protected static string $settings = AboutPage::class;

    protected static ?string $navigationGroup = 'Site Management';

    protected static ?int $navigationSort = 7;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make()->schema([
                        CuratorPicker::make('aboutUsBreadcrumbImage')
                            ->label('Breadcrumb Image')
                            ->lazyLoad()
                            ->listDisplay()
                            ->constrained(true)
                            ->visibility(true)
                            ->required(),

                        Forms\Components\Group::make()->schema([
                            Toggle::make('enableAboutUsTeamTestimonialSection')
                                ->label('Enable Team Testimonial Section')
                                ->required(),

                            Toggle::make('enableAboutUsCTASection')
                                ->label('Enable CTA Section')
                                ->required(),

                            Toggle::make('enableAboutUsSponsorSection')
                                ->label('Enable Sponsor Section')
                                ->required(),
                        ]),
                    ])->columns(2),

                    Forms\Components\Section::make('Key Features Section')->schema([
                        TextInput::make('aboutUsKeyFeatureTitle')
                            ->label('Title')
                            ->required(),
                        Textarea::make('aboutUsKeyFeatureMessage')
                            ->label('Message')
                            ->required(),
                        Forms\Components\Group::make()->schema([
                            Repeater::make('aboutUsKeyFeaturePoints')->schema([
                                Textarea::make('title')
                                    ->label('Title')
                                    ->required(),
                                CuratorPicker::make('image')
                                    ->label('Image')
                                    ->lazyLoad()
                                    ->listDisplay()
                                    ->constrained(true)
                                    ->visibility(true)
                                    ->required(),
                            ])->columns(2),
                        ])->columnSpanFull(),
                    ])->columns(2),
                ]),
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make('Video Section')->schema([
                        CuratorPicker::make('aboutUsVideoImage')
                            ->label('Image')
                            ->lazyLoad()
                            ->listDisplay()
                            ->constrained(true)
                            ->visibility(true)
                            ->required(),

                        TextInput::make('aboutUsVideoURL')
                            ->label('Youtube URL')
                            ->required(),
                    ])->columns(2),
                    Forms\Components\Section::make('About Section')->schema([
                        Forms\Components\Group::make()->schema([
                            TextInput::make('aboutUsTitle')
                                ->label('Title')
                                ->required(),

                            CuratorPicker::make('aboutUsImage')
                                ->label('Image')
                                ->lazyLoad()
                                ->listDisplay()
                                ->constrained(true)
                                ->visibility(true)
                                ->required(),
                        ]),
                        Textarea::make('aboutUsMessage')
                            ->label('Message')
                            ->required(),

                        TextInput::make('aboutUsButtonLabel')
                            ->label('Button Label')
                            ->required(),

                        TextInput::make('aboutUsButtonURL')
                            ->label('Button URL')
                            ->required(),
                    ])->columns(2),

                    Forms\Components\Section::make('Team Section')->schema([
                        TextInput::make('aboutUsTeamSectionTitle')
                            ->label('Title')
                            ->required(),

                        Textarea::make('aboutUsTeamSectionMessage')
                            ->label('Message')
                            ->required(),
                    ])->columns(2),
                ]),
            ]);
    }
}
