<?php

namespace App\Ship\Parents\Providers;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

abstract class MainServiceProvider extends LaravelServiceProvider
{
    /**
     * Perform post-registration booting of services.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Register anything in the container.
     */
    public function register(): void
    {
        //
    }
}
