<?php

declare(strict_types=1);

namespace App\Blog\Post\UI\WEB\Livewire;

use App\Blog\Post\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;

    public function render()
    {
        $posts = Post::query()
            ->where('published_at', '<=', now())
            ->orderBy('published_at')
            ->paginate(5);

        return view('container@Post::livewire.post-list', compact('posts'))
            ->layout('container@Post::livewire.layouts.app');
    }
}
