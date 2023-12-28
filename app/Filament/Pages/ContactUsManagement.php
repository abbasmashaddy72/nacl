<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Forms\Form;
use App\Settings\ContactUsPage;
use Filament\Pages\SettingsPage;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Awcodes\Curator\Components\Forms\CuratorPicker;

class ContactUsManagement extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-user-plus';

    protected static string $settings = ContactUsPage::class;

    protected static ?string $navigationGroup = 'Site Management';

    protected static ?int $navigationSort = 8;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make()->schema([
                        CuratorPicker::make('contactUsBreadcrumbImage')
                            ->label('Image')
                            ->lazyLoad()
                            ->listDisplay()
                            ->constrained(true)
                            ->visibility(true)
                            ->required(),
                        Toggle::make('enableMapSection')
                            ->label('Enable Map Section')
                            ->required(),
                    ])->columns(2),

                    Forms\Components\Section::make('Phone Details')->schema([
                        TextInput::make('contactUsPhoneNo')
                            ->label('Phone No')
                            ->required(),

                        Textarea::make('contactUsPhoneMessage')
                            ->label('Message')
                            ->required(),
                    ])->columns(2),
                ]),
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make('Email Details')->schema([
                        TextInput::make('contactUsEmail')
                            ->label('Email')
                            ->required(),

                        Textarea::make('contactUsEmailMessage')
                            ->label('Message')
                            ->required(),
                    ])->columns(2),
                    Forms\Components\Section::make('Location Details')->schema([
                        TextInput::make('contactUsMapLink')
                            ->label('Map Link')
                            ->required(),

                        Textarea::make('contactUsLocationMessage')
                            ->label('Message')
                            ->required(),
                    ])->columns(2),
                ]),
            ]);
    }
}
