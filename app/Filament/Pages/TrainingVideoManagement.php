<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use App\Settings\TrainingVideoPage;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Awcodes\Curator\Components\Forms\CuratorPicker;

class TrainingVideoManagement extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

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
                        Textarea::make('descriptionSectionPoints')
                            ->label('Points')
                            ->required(),
                    ])->columns(2),

                    Forms\Components\Section::make('Training Video Section')->schema([
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
                        Forms\Components\Section::make('Point 1')->schema([
                            TextInput::make('flowTitle1')
                                ->label('Title')
                                ->required(),
                            Textarea::make('flowMessage1')
                                ->label('Message')
                                ->required(),
                        ])->columns(2),
                        Forms\Components\Section::make('Point 2')->schema([
                            TextInput::make('flowTitle2')
                                ->label('Title')
                                ->required(),
                            Textarea::make('flowMessage2')
                                ->label('Message')
                                ->required(),
                        ])->columns(2),
                        Forms\Components\Section::make('Point 3')->schema([
                            TextInput::make('flowTitle3')
                                ->label('Title')
                                ->required(),
                            Textarea::make('flowMessage3')
                                ->label('Message')
                                ->required(),
                        ])->columns(2),
                    ])->columns(2),
                ]),
            ]);
    }
}
