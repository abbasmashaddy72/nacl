<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\LaneBooking;
use App\Enums\LaneAmountStatus;
use App\Enums\LaneBookingStatus;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LaneBookingResource\Pages;
use App\Filament\Resources\LaneBookingResource\RelationManagers;

class LaneBookingResource extends Resource
{
    protected static ?string $model = LaneBooking::class;

    protected static ?string $navigationIcon = 'heroicon-o-table-cells';

    protected static ?string $navigationGroup = 'Slot Management';

    protected static ?int $navigationSort = 4;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        // get processing orders count
        $count = (int) static::getNavigationBadge();

        // show warning badge if there are more than 10 orders
        // in processing state otherwise show success badge
        return $count > 10 ? 'warning' : 'success';
    }

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
                            ->searchable()
                            ->multiple()
                            ->required(),
                    ])->columns(2),
                    Forms\Components\Section::make('User Details')->schema([
                        Forms\Components\Select::make('user_id')
                            ->relationship('user', 'name')
                            ->searchable(),
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('contact_number')
                            ->required()
                            ->maxLength(255),
                    ])->columns(2),
                ]),
                Forms\Components\Group::make()->schema([
                    Forms\Components\Section::make('Payment')->schema([
                        Forms\Components\TextInput::make('advance_amount')
                            ->required()
                            ->prefix('$')
                            ->numeric(),
                        Forms\Components\TextInput::make('total_amount')
                            ->required()
                            ->prefix('$')
                            ->numeric(),
                        Forms\Components\TextInput::make('refund_amount')
                            ->required()
                            ->prefix('$')
                            ->numeric()
                            ->default(0.00),
                        Forms\Components\Select::make('amount_status')
                            ->required()
                            ->searchable()
                            ->options(LaneAmountStatus::options()),
                    ])->columns(2),
                    Forms\Components\Section::make('Booking Timing')->schema([
                        Forms\Components\DateTimePicker::make('start_date_time')
                            ->seconds(false)
                            ->closeOnDateSelection()
                            ->native(false)
                            ->required(),
                        Forms\Components\DateTimePicker::make('end_date_time')
                            ->seconds(false)
                            ->closeOnDateSelection()
                            ->native(false)
                            ->required(),
                        Forms\Components\Select::make('status')
                            ->required()
                            ->searchable()
                            ->options(LaneBookingStatus::options()),
                    ])->columns(2),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('lanes.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sport.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('contact_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('advance_amount')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_amount')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('refund_amount')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('amount_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('start_date_time')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date_time')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
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
            'index' => Pages\ListLaneBookings::route('/'),
            'create' => Pages\CreateLaneBooking::route('/create'),
            'edit' => Pages\EditLaneBooking::route('/{record}/edit'),
        ];
    }
}
