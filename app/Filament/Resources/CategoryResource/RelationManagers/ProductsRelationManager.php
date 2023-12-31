<?php

namespace App\Filament\Resources\CategoryResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use App\Enums\ProductType;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Editors\TipTapEditor;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Resources\RelationManagers\RelationManager;

class ProductsRelationManager extends RelationManager
{
    protected static string $relationship = 'products';

    public function form(Form $form): Form
    {
        // return ProductResource::form($form);

        return $form
            ->schema([
                Forms\Components\Tabs::make('Products')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('Information')
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->live(onBlur: true)
                                    ->autofocus()
                                    ->afterStateUpdated(function (string $state, Set $set) {
                                        // Automatically generate a slug when the name is updated.
                                        $set('slug', Str::slug($state));
                                    }),

                                Forms\Components\TextInput::make('slug')
                                    ->required()
                                    ->disabled()
                                    ->unique(ignoreRecord: true)
                                    ->dehydrated(),

                                Forms\Components\Select::make('brand_id')
                                    ->relationship('brand', 'name')
                                    ->required()
                                    ->preload()
                                    ->searchable()
                                    ->columnSpanFull(),

                                TipTapEditor::component('description')
                                    ->columnSpan('full'),
                            ])->columns(2),

                        Forms\Components\Tabs\Tab::make('Pricing & Inventory')
                            ->schema([
                                Forms\Components\TextInput::make('sku')
                                    ->label('SKU (Stock Keeping Unit)')
                                    ->unique(ignoreRecord: true)
                                    ->required(),

                                Forms\Components\TextInput::make('price')
                                    ->numeric()
                                    ->prefix('$')
                                    ->required(),

                                Forms\Components\TextInput::make('quantity')
                                    ->numeric()
                                    ->minValue(1)
                                    ->maxValue(100)
                                    ->default(1)
                                    ->required(),

                                Forms\Components\Select::make('type')
                                    ->options(ProductType::options())
                                    ->default(ProductType::Deliverable),
                            ])->columns(2),

                        Forms\Components\Tabs\Tab::make('Additional Information')
                            ->schema([
                                Forms\Components\Toggle::make('is_visible')
                                    ->label('Visibility')
                                    ->helperText('Whether or not the product is visible to customers.')
                                    ->default(true),

                                Forms\Components\Toggle::make('is_featured')
                                    ->label('Featured')
                                    ->helperText('Whether or not the product is featured on the homepage.'),

                                Forms\Components\DatePicker::make('published_at')
                                    ->label('Publish Date')
                                    ->helperText('The date the product will be available for purchase.')
                                    ->default(now()),

                                Forms\Components\Select::make('categories')
                                    ->relationship('categories', 'name')
                                    ->preload()
                                    ->multiple()
                                    ->default([$this->getOwnerRecord()->id])
                                    ->required(),

                                CuratorPicker::make('images')
                                    ->label('Image')
                                    ->lazyLoad()
                                    ->listDisplay()
                                    ->constrained(true)
                                    ->visibility(true)
                                    ->required(),
                            ])->columns(2),
                    ])->columnSpanFull()
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\ImageColumn::make('images')
                    ->label('Image'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('brand.name')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\IconColumn::make('is_visible')
                    ->label('Visibility')
                    ->sortable()
                    ->toggleable()
                    ->boolean(),
                Tables\Columns\TextColumn::make('price')
                    ->sortable(),
                Tables\Columns\TextColumn::make('quantity')
                    ->sortable(),
                Tables\Columns\TextColumn::make('published_at')
                    ->sortable()
                    ->date(),
                Tables\Columns\TextColumn::make('type')
                    ->toggleable()
                    ->toggledHiddenByDefault(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
