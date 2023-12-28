<?php

namespace App\Models;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Builder;

trait BlogScope
{
    /**
     * @param  Builder<Blog>  $query
     */
    public function scopeSticky(Builder $query): Builder
    {
        return $query
            ->whereNotNull('sticky_until')
            ->whereDate('sticky_until', '>=', now())
            ->whereDate('published_at', '<=', now());
    }

    /**
     * @param  Builder<Blog>  $query
     */
    public function scopeNotSticky(Builder $query): Builder
    {
        return $query->where(function ($q) {
            return $q->whereDate('sticky_until', '<=', now())->orWhereNull('sticky_until');
        })
            ->whereDate('published_at', '<=', now());
    }

    /**
     * @param  Builder<Blog>  $query
     */
    public function scopePublished(Builder $query): Builder
    {
        return $query
            ->where('status', 'publish')
            ->whereDate('published_at', '<=', now());
    }

    /**
     * @param  Builder<Blog>  $query
     */
    public function scopeRelated(Builder $query, Blog $blog): Builder
    {
        return $query
            ->withAnyTags($blog->tags->pluck('name')->toArray(), 'category');
    }

    /**
     * @param  Builder<Blog>  $query
     */
    public function scopePage(Builder $query): Builder
    {
        return $query
            ->whereDate('published_at', '<=', now());
    }

    /**
     * @param  Builder<Blog>  $query
     */
    public function scopeBlogs(Builder $query): Builder
    {
        return $query
            ->whereDate('published_at', '<=', now());
    }

    /**
     * @param  Builder<Blog>  $query
     * @param  ?string  $category
     */
    public function scopeForCategory(Builder $query, ?string $category = null): Builder
    {
        if ($category !== null) {
            return $query->where(
                function ($query) use ($category) {
                    $query->withAnyTags([$category], 'category');

                    return $query;
                }
            );
        }

        return $query;
    }

    /**
     * @param  Builder<Blog>  $query
     */
    public function scopeSearch(Builder $query, ?string $term): Builder
    {
        if ($term !== null) {
            return $query->where(
                function ($query) use ($term) {
                    foreach (['title', 'slug', 'content', 'description'] as $attribute) {
                        $query->orWhere($attribute, 'like', "%{$term}%");
                    }

                    return $query;
                }
            );
        }

        return $query;
    }
}
