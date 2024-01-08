<?php

namespace App\Filament\Resources;

use App\Models\Page;
use Filament\Tables;
use Filament\Forms\{Get, Set};
use Filament\Forms\Form;
use App\Models\BlogStatus;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Editors\TipTapEditor;
use Filament\Resources\Resource;
use Filament\Forms\Components\Tabs;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Placeholder;
use Filament\Tables\Actions\RestoreAction;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\PageResource\Pages;
use Filament\Tables\Actions\ForceDeleteAction;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Wallo\FilamentSelectify\Components\ButtonGroup;

class PageResource extends Resource
{
    protected static ?string $navigationIcon = 'heroicon-o-document';

    protected static ?string $navigationGroup = 'CMS';

    protected static ?int $navigationSort = 2;

    /**
     * @return Builder<Page>
     */
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('page_tabs')->schema([
                    Tabs\Tab::make(__('Title & Content'))->schema([
                        TextInput::make('title')
                            ->label(__('Page Title'))
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (Set $set, $state) {
                                $set('slug', Str::slug($state));
                            }),

                        TipTapEditor::component(),
                    ]),
                    Tabs\Tab::make(__('SEO'))->schema([
                        Hidden::make('user_id')
                            ->required()
                            ->default(auth()->user()->id),

                        Textarea::make('description')
                            ->maxLength(255)
                            ->label(__('Description'))
                            ->hint(__('Write an excerpt for your page')),

                        TextInput::make('slug')
                            ->unique(ignorable: fn (?Page $record): ?Page => $record)
                            ->required()
                            ->maxLength(255)
                            ->label(__('Page Slug')),
                    ]),
                    Tabs\Tab::make(__('Visibility'))->schema([
                        Select::make('status')
                            ->label(__('status'))
                            ->default('publish')
                            ->required()
                            ->live()
                            ->options(BlogStatus::pluck('label', 'name')),

                        DateTimePicker::make('published_at')
                            ->label(__('published at'))
                            ->default(now()),
                    ]),
                    Tabs\Tab::make(__('Image'))->schema([
                        Placeholder::make(__('Featured Image')),
                        ButtonGroup::make('featured_image_type')
                            ->live()
                            ->label('')
                            ->dehydrated(false)
                            ->afterStateHydrated(function (Set $set, Get $get) {
                                $setVal = ($get('featured_image') === null) ? 'upload' : 'url';
                                $set('featured_image_type', $setVal);
                            })
                            ->options([
                                'upload' => __('upload'),
                                'url' => __('url'),
                            ])
                            ->default('upload'),
                        CuratorPicker::make('featured_image_upload')
                            ->label('Image')
                            ->lazyLoad()
                            ->listDisplay()
                            ->constrained(true)
                            ->visibility(true)
                            ->required(),
                        TextInput::make('featured_image')
                            ->label(__('featured image url'))
                            ->visible(fn (Get $get) => $get('featured_image_type') === 'url')
                            ->url(),
                    ]),
                ])->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label(__('Title'))->searchable()->sortable()->toggleable(),
                ViewColumn::make('status_desc')
                    ->label(__('Status'))
                    ->sortable(['status'])
                    ->searchable(['status'])
                    ->toggleable()
                    ->view('components.status')
                    ->tooltip(fn (Page $record): string => $record->published_at->format('Y/m/d | H:i A')),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('Open')
                    ->color('warning')
                    ->icon('heroicon-o-arrow-top-right-on-square')
                    ->label(__('Open'))
                    ->url(fn (Page $record): string => route('page', ['slug' => $record]))
                    ->openUrlInNewTab(),
                DeleteAction::make('delete'),
                ForceDeleteAction::make(),
                RestoreAction::make(),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
