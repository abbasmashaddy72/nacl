<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LaneSportResource\Pages;
use App\Filament\Resources\LaneSportResource\RelationManagers;
use App\Models\LaneSport;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LaneSportResource extends Resource
{
    protected static ?string $model = LaneSport::class;

    protected static ?string $modelLabel = 'Slots';

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    protected static ?string $navigationGroup = 'Slot Management';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('lane_id')
                    ->relationship('lane', 'name')
                    ->required(),
                Forms\Components\Select::make('sport_id')
                    ->relationship('sport', 'name')
                    ->required(),
                Forms\Components\TextInput::make('min_players')
                    ->required()
                    ->maxLength(255)
                    ->default(2),
                Forms\Components\TextInput::make('max_players')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('charges_rate')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('charge_minutes')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('weekend_amount_percentage')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('per_player_percentage')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('start_time')
                    ->required(),
                Forms\Components\TextInput::make('end_time')
                    ->required(),
                Forms\Components\TextInput::make('slot_minutes')
                    ->required()
                    ->numeric()
                    ->default(30),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('lane.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sport.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('min_players')
                    ->searchable(),
                Tables\Columns\TextColumn::make('max_players')
                    ->searchable(),
                Tables\Columns\TextColumn::make('charges_rate')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('charge_minutes')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('weekend_amount_percentage')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('per_player_percentage')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('start_time'),
                Tables\Columns\TextColumn::make('end_time'),
                Tables\Columns\TextColumn::make('slot_minutes')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
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
            'index' => Pages\ListLaneSports::route('/'),
            'create' => Pages\CreateLaneSport::route('/create'),
            'edit' => Pages\EditLaneSport::route('/{record}/edit'),
        ];
    }
}
