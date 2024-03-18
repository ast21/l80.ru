<?php

declare(strict_types=1);

namespace App\Blog\Post\UI\WEB\Controllers;

use App\Blog\Post\Models\Post;
use Illuminate\View\View;

class BlogController
{
    public function index(): View
    {
        return view('container@Post::index', ['posts' => Post::all()->toBase()]);
    }

    public function posts(): View
    {
        $posts = Post::limit(5)->latest()->toBase();

        return view('container@Post::posts', ['posts' => $posts]);
    }
}
