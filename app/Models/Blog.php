<?php

namespace App\Models;

use Spatie\Tags\HasTags;
use App\Models\BlogScope;
use App\Editors\TipTapEditor;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Support\Collection;
use Database\Factories\BlogFactory;
use Illuminate\Support\Facades\Blade;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model implements HasMedia
{
    use HasFactory, HasTags, InteractsWithMedia, BlogScope, SoftDeletes;

    protected $fillable = [
        'user_id',
        'blog_category_id',
        'title',
        'slug',
        'description',
        'content',
        'featured_image',
        'status',
        'sticky_until',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'sticky_until' => 'datetime',
    ];

    protected static function newFactory(): BlogFactory
    {
        return BlogFactory::new();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function categories(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class, 'blog_id', 'blog_category_id');
    }

    public function statusDesc(): string
    {
        $BlogStatus = BlogStatus::where('name', $this->status)->first();
        $icon = Blade::render('@svg("' . $BlogStatus->icon . '","w-4 h-4 inline-flex")');

        return "<span title='" . __('Blog status') . "' class='$BlogStatus->class'> " . $icon . " {$BlogStatus->label}</span>";
    }

    /** @return BelongsTo<Blog, Model> */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /** @return BelongsTo<Blog, Blog> */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id', 'id');
    }

    public function image(string $collection = 'Blogs'): Collection | string | null
    {
        if (!$this->getMedia($collection)->isEmpty()) {
            return $this->getFirstMediaUrl($collection);
        } else {
            return $this->featured_image;
        }
    }

    public function getContent(): string
    {
        return $this->parseContent(TipTapEditor::render($this->content));
    }
}
