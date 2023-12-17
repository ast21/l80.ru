<?php

namespace App\Blog\Category\Models;

use App\Blog\Post\Models\Post;
use App\Ship\Abstracts\Models\AbstractModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends AbstractModel
{
    protected $table = 'blog_categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_visible',
    ];

    protected $casts = [
        'is_visible' => 'boolean',
    ];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'blog_category_id');
    }
}
