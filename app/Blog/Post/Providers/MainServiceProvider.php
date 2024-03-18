<?php

namespace App\Blog\Post\Providers;

use App\Blog\Post\UI\WEB\Livewire\PostList;
use App\Ship\Abstracts\Providers\AbstractMainServiceProvider;
use Livewire\Livewire;

class MainServiceProvider extends AbstractMainServiceProvider
{
    protected array $serviceProviders = [
        RouteServiceProvider::class,
    ];

    public function boot(): void
    {
        Livewire::component('post-list', PostList::class);
        parent::boot();
    }
}
