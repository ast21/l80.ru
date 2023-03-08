<?php

namespace App\Ship\Providers;

use App\Ship\Parents\Providers\ParentMainServiceProvider;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;

class ShipProvider extends ParentMainServiceProvider
{
    public array $serviceProviders = [
        AuthServiceProvider::class,
        EventServiceProvider::class,
        RouteServiceProvider::class,
        PlatformServiceProvider::class,
    ];

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        parent::boot();
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        /**
         * Load the ide-helper service provider only in non production environments.
         */
        if ($this->app->isLocal()) {
            $this->app->register(IdeHelperServiceProvider::class);
        }

        parent::register();
    }
}
