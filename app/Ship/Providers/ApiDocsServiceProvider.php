<?php

namespace App\Ship\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ApiDocsServiceProvider extends LaravelServiceProvider
{
    public function boot(): void
    {
        Gate::define('viewApiDocs', function ($user) {
            return $user?->hasRole(['super_admin']);
        });
    }
}
