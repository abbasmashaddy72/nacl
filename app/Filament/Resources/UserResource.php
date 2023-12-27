<?php

namespace App\Filament\Resources;

use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\UserResource\Pages;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use Tapp\FilamentAuthenticationLog\RelationManagers\AuthenticationLogsRelationManager;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'User Management';

    protected static ?int $navigationSort = 0;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('email')->required(),
                TextInput::make('password')->required(),
                Select::make('roles')
                    ->relationship('roles', 'name')
                    ->multiple()
                    ->preload()
                    ->searchable()
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table->emptyStateHeading('No Users yet')
            ->emptyStateIcon('heroicon-o-user')
            ->emptyStateActions([
                Action::make('create')
                    ->label('Create user')
                    ->url(route('filament.admin.resources.users.create'))
                    ->icon('heroicon-m-plus')
                    ->button(),
            ])
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('roles.name')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('email')->sortable()->searchable(),
                TextColumn::make('email_verified_at')->sortable()->since(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
                ExportBulkAction::make()
            ]);
    }

    public static function getRelations(): array
    {
        return [
            AuthenticationLogsRelationManager::class,
            // AuditsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
