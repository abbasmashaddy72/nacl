<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Forms\Form;
use App\Settings\ShopPage;
use Filament\Pages\SettingsPage;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Awcodes\Curator\Components\Forms\CuratorPicker;

class ShopManagement extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    protected static string $settings = ShopPage::class;

    protected static ?string $navigationGroup = 'Site Management';

    protected static ?int $navigationSort = 5;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make()->schema([
                        CuratorPicker::make('shopBreadcrumbImage')
                            ->label('Breadcrumb Image')
                            ->lazyLoad()
                            ->listDisplay()
                            ->constrained(true)
                            ->visibility(true)
                            ->required(),

                        Forms\Components\Group::make()->schema([
                            Toggle::make('enableShopAppSection')
                                ->label('Enable APP Section')
                                ->required(),

                            Toggle::make('enableShopAppSection')
                                ->label('Enable CTA Section')
                                ->required(),
                        ]),
                    ])->columns(2),
                ]),
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make('App Section')->schema([
                        TextInput::make('shopAppTitle')
                            ->label('Title')
                            ->required(),

                        TextInput::make('shopAppMessage')
                            ->label('Message')
                            ->required(),

                        TextInput::make('shopAppAppStoreURL')
                            ->label('Apple Store URL')
                            ->required(),

                        TextInput::make('shopAppGoogleStoreURL')
                            ->label('Google Store URL')
                            ->required(),
                    ])->columns(2),
                ]),
            ]);
    }
}
