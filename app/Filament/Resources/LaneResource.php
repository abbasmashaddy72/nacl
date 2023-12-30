<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Lane;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Editors\TipTapEditor;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\LaneResource\Pages;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LaneResource\RelationManagers;

class LaneResource extends Resource
{
    protected static ?string $model = Lane::class;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';

    protected static ?string $navigationGroup = 'Slot Management';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()->schema([
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('slug')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('short_description')
                        ->required()
                        ->maxLength(255),
                    CuratorPicker::make('images')
                        ->label('Images')
                        ->lazyLoad()
                        ->listDisplay()
                        ->constrained(true)
                        ->visibility(true)
                        ->multiple()
                        ->required(),
                    TipTapEditor::component('description')->columnSpanFull(),
                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListLanes::route('/'),
            'create' => Pages\CreateLane::route('/create'),
            'edit' => Pages\EditLane::route('/{record}/edit'),
        ];
    }
}
