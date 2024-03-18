<?php

use App\Blog\Post\UI\WEB\Controllers\BlogController;
use App\Blog\Post\UI\WEB\Livewire\PostList;
use App\Blog\Post\UI\WEB\Livewire\PostView;
use Illuminate\Support\Facades\Route;

Route::domain(config('blog.domain'))->prefix(config('blog.prefix'))->group(function () {
    Route::get('/', [BlogController::class, 'index']);
    Route::get('/posts', [PostList::class, '__invoke'])->name('blog.post.list');
    Route::get('/posts/{post}', [PostView::class, '__invoke'])->name('blog.post.view');

    Route::get('/view/posts', [BlogController::class, 'posts'])->name('blog.posts');
});
