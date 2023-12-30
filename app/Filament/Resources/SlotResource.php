<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Slot;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SlotResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SlotResource\RelationManagers;
use HusamTariq\FilamentTimePicker\Forms\Components\TimePickerField;

class SlotResource extends Resource
{
    protected static ?string $model = Slot::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    protected static ?string $navigationGroup = 'Slot Management';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make('Lane Sport Selection')->schema([
                        Forms\Components\Select::make('sport_id')
                            ->relationship('sport', 'name')
                            ->searchable()
                            ->required(),
                        Forms\Components\Select::make('lanes')
                            ->relationship('lanes', 'name')
                            ->multiple()
                            ->searchable()
                            ->required(),
                    ])->columns(2),
                    Forms\Components\Section::make('Min Max Players')->schema([
                        Forms\Components\TextInput::make('min_players')
                            ->required()
                            ->numeric()
                            ->default(2),
                        Forms\Components\TextInput::make('max_players')
                            ->required()
                            ->numeric()
                            ->default(12),
                    ])->columns(2),
                ]),
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make('Payment Section')->schema([
                        Forms\Components\TextInput::make('base_price')
                            ->prefix('$')
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('base_time')
                            ->suffix('minutes')
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('weekend_amount_percentage')
                            ->prefix('%')
                            ->required()
                            ->numeric(),
                        Forms\Components\TextInput::make('per_player_percentage')
                            ->prefix('%')
                            ->required()
                            ->numeric(),
                    ])->columns(2),
                    Forms\Components\Section::make('Slot Details')->schema([
                        TimePickerField::make('start_time')
                            ->required(),
                        TimePickerField::make('end_time')
                            ->required(),
                        Forms\Components\TextInput::make('slot_minutes')
                            ->suffix('minutes')
                            ->required()
                            ->numeric()
                            ->default(30),
                    ])->columns(2),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sport.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lanes.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('min_players')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('max_players')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('base_price')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('base_time')
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
            'index' => Pages\ListSlots::route('/'),
            'create' => Pages\CreateSlot::route('/create'),
            'edit' => Pages\EditSlot::route('/{record}/edit'),
        ];
    }
}
