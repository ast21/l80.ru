<?php

declare(strict_types=1);

namespace App\Blog\Post\UI\WEB\Livewire;

use App\Blog\Post\Models\Post;
use Livewire\Component;

class PostView extends Component
{
    public $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('container@Post::livewire.post-view')
            ->layout('container@Post::livewire.layouts.app');
    }
}
