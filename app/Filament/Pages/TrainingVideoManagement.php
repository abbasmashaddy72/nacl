<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use App\Settings\TrainingVideoPage;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Awcodes\Curator\Components\Forms\CuratorPicker;

class TrainingVideoManagement extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $title = 'Training Video Page';

    protected static string $settings = TrainingVideoPage::class;

    protected static ?string $navigationGroup = 'Site Management';

    protected static ?int $navigationSort = 6;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make()->schema([
                        CuratorPicker::make('trainingBreadcrumbImage')
                            ->label('Breadcrumb Image')
                            ->lazyLoad()
                            ->listDisplay()
                            ->constrained(true)
                            ->visibility(true)
                            ->required(),
                        Toggle::make('enableTrainingVideoCTASection')
                            ->label('Enable CTA Section')
                            ->required(),
                    ])->columns(2),

                    Forms\Components\Section::make('Description Section')->schema([
                        TextInput::make('descriptionSectionTitle')
                            ->label('Title')
                            ->required(),
                        CuratorPicker::make('descriptionSectionImage')
                            ->label('Image')
                            ->lazyLoad()
                            ->listDisplay()
                            ->constrained(true)
                            ->visibility(true)
                            ->required(),
                        Textarea::make('descriptionSectionMessage')
                            ->label('Message')
                            ->required(),
                        Repeater::make('descriptionSectionPoints')->schema([
                            Textarea::make('point')
                                ->label('Point')
                                ->required(),
                        ])->columns(2),
                    ])->columns(2),

                    Forms\Components\Section::make('Training Video Section')->schema([
                        Forms\Components\Group::make()->schema([
                            TextInput::make('trainingVideoTitle')
                                ->label('Title')
                                ->required(),
                            CuratorPicker::make('trainingVideoImages')
                                ->label('Image')
                                ->lazyLoad()
                                ->listDisplay()
                                ->constrained(true)
                                ->visibility(true)
                                ->required(),
                        ]),
                        Textarea::make('trainingVideoMessage')
                            ->label('Message')
                            ->required(),
                    ])->columns(2),

                    Forms\Components\Section::make('Testimonial Section')->schema([
                        TextInput::make('testimonialTitle')
                            ->label('Title')
                            ->required(),
                        Textarea::make('testimonialMessage')
                            ->label('Message')
                            ->required(),
                    ])->columns(2),
                ]),
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make('Flow Section')->schema([
                        Repeater::make('trainingFlow')->schema([
                            TextInput::make('title')
                                ->label('Title')
                                ->required(),
                            Textarea::make('message')
                                ->label('Message')
                                ->required(),
                        ])->columns(2),
                    ])->columns(2),
                ]),
            ]);
    }
}
