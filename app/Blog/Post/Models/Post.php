<?php

namespace App\Blog\Post\Models;

use App\Blog\Category\Models\Category;
use App\Blog\Post\Database\Factories\PostFactory;
use App\Ship\Abstracts\Models\AbstractModel;
use App\Ship\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Tags\HasTags;

class Post extends AbstractModel implements HasMedia
{
    use HasTags;
    use InteractsWithMedia;

    protected $table = 'blog_posts';

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'content',
        'published_at',
        'image',
        'user_id',
    ];

    protected $casts = [
        'published_at' => 'date',
    ];

    protected static function booted(): void
    {
        static::creating(function (Post $post) {
            if (! $post->user_id) {
                $post->user_id = auth()->id();
            }
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('image')
            ->singleFile();
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->crop('crop-center', 112, 63);
    }

    protected static function newFactory()
    {
        return PostFactory::new();
    }
}
