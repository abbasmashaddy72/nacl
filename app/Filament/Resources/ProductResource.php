<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Set;
use Filament\Forms\Form;
use App\Enums\ProductType;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Editors\TipTapEditor;
use Filament\Resources\Resource;
use App\Filament\Resources\ProductResource\Pages;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Shop';

    protected static ?int $navigationSort = 0;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make()->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->unique(Product::class, 'name', ignoreRecord: true)
                            ->live(onBlur: true)
                            ->autofocus()
                            ->afterStateUpdated(function (string $state, Set $set) {
                                // Automatically generate a slug when the name is updated.
                                $set('slug', Str::slug($state));
                            }),
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->disabled()
                            ->unique(Product::class, 'slug', ignoreRecord: true)
                            ->dehydrated(),
                        TipTapEditor::component('description')
                            ->columnSpan('full'),
                    ])->columns(2),
                    Forms\Components\Section::make('Pricing & Inventory')->schema([
                        Forms\Components\TextInput::make('sku')
                            ->label('SKU (Stock Keeping Unit)')
                            ->unique(Product::class, 'sku', ignoreRecord: true)
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
                            ->native(false),
                    ])->columns(2),
                ]),
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make('Status')->schema([
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
                    ]),
                    Forms\Components\Section::make('Image')->schema([
                        CuratorPicker::make('images')
                            ->label('Image')
                            ->lazyLoad()
                            ->listDisplay()
                            ->constrained(true)
                            ->visibility(true)
                            ->required(),
                    ])->collapsible(),
                    Forms\Components\Section::make('Associations')->schema([
                        Forms\Components\Select::make('brand_id')
                            ->relationship('brand', 'name')
                            ->native(false)
                            ->required(),
                        Forms\Components\Select::make('categories')
                            ->relationship('categories', 'name')
                            ->preload()
                            ->multiple()
                            ->required(),
                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
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
                Tables\Filters\TernaryFilter::make('is_visible')
                    ->label('Visibility')
                    ->trueLabel('Only visible products')
                    ->falseLabel('Only hidden products')
                    ->native(false)
                    ->boolean(),

                Tables\Filters\SelectFilter::make('brand')
                    ->relationship('brand', 'name')
            ])
            ->actions([
                Tables\Actions\EditAction::make()->iconButton(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    ExportBulkAction::make(),
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
