<?php

namespace App\Filament\Resources;

use App\Models\Blog;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use App\Models\BlogStatus;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Editors\TipTapEditor;
use Filament\Resources\Resource;
use Filament\Forms\Components\Tabs;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Placeholder;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Columns\SpatieTagsColumn;
use App\Filament\Resources\BlogResource\Pages;
use Filament\Tables\Actions\ForceDeleteAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Wallo\FilamentSelectify\Components\ButtonGroup;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'CMS';

    protected static ?int $navigationSort = 2;

    /**
     * @return Builder<Blog>
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
                Tabs::make('blog_tabs')->schema([
                    Tabs\Tab::make(__('Title & Content'))->schema([
                        TextInput::make('title')
                            ->label(__('Blog Title'))
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
                            ->hint(__('Write an excerpt for your blog')),

                        TextInput::make('slug')
                            ->unique(ignorable: fn (?Blog $record): ?Blog => $record)
                            ->required()
                            ->maxLength(255)
                            ->label(__('Blog Slug')),
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
                        SpatieMediaLibraryFileUpload::make('featured_image_upload')
                            ->collection('pages')
                            ->disk('public')
                            ->directory('')
                            ->visible(fn (Get $get) => $get('featured_image_type') === 'upload')
                            ->label(''),
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
                    ->tooltip(fn (Blog $record): string => $record->published_at->format('Y/m/d | H:i A')),

                SpatieTagsColumn::make('category')
                    ->label(__('Blog Category'))
                    ->toggleable()
                    ->type('category'),
            ])
            ->filters([
                TrashedFilter::make(),
                SelectFilter::make('status')
                    ->multiple()
                    ->label(__('Status'))
                    ->options(BlogStatus::pluck('label', 'name')),

                Filter::make('sticky')
                    ->label(__('Still Sticky'))
                    // @phpstan-ignore-next-line
                    ->query(fn (Builder $query): Builder => $query->sticky()),

                Filter::make('not_sticky')
                    ->label(__('Not Sticky'))
                    ->query(
                        fn (Builder $query): Builder => $query
                            ->whereDate('sticky_until', '<=', now())
                            ->orWhereNull('sticky_until')
                    ),

                Filter::make('sticky_only')
                    ->label(__('Sticky Only'))
                    ->query(
                        fn (Builder $query): Builder => $query
                            ->whereNotNull('sticky_until')
                    ),

                SelectFilter::make('tags')
                    ->multiple()
                    ->relationship('tags', 'name')
                    ->label(__('Tags')),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('Open')
                    ->color('warning')
                    ->icon('heroicon-o-arrow-top-right-on-square')
                    ->label(__('Open'))
                    ->url(fn (Blog $record): string => route('blog', ['slug' => $record]))
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
