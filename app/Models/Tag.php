<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Tag extends \Spatie\Tags\Tag
{
    public function library(): MorphToMany
    {
        return $this->morphedByMany(BlogCategory::class, 'taggable');
    }

    public function category(): MorphToMany
    {
        return $this->morphedByMany(Blog::class, 'taggable');
    }

    public function faq(): MorphToMany
    {
        return $this->morphedByMany(Faq::class, 'taggable');
    }

    public function tag(): MorphToMany
    {
        return $this->morphedByMany(Blog::class, 'taggable');
    }

    /** @return MorphToMany<Blog> */
    public function blogsPublished(): MorphToMany
    {
        // @phpstan-ignore-next-line
        return $this->morphedByMany(Blog::class, 'taggable')->published();
    }

    protected function generateSlug(string $locale): string
    {
        if ($this->slug !== null) {
            return $this->slug;
        }

        $slugger = config('tags.slugger');

        $slugger ??= '\Illuminate\Support\Str::slug';

        return call_user_func($slugger, $this->getTranslation('name', $locale));
    }

    public static function findBySlug(string $slug, ?string $type = null, ?string $locale = null): ?Model
    {
        $locale = $locale ?? static::getLocale();

        return static::query()
            ->where("slug->{$locale}", $slug)
            ->where('type', $type)
            ->first();
    }
}
