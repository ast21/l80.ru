<?php

namespace App\Ship\Parents\Providers;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

abstract class MainServiceProvider extends LaravelServiceProvider
{
    public array $serviceProviders = [
        //
    ];

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
        $this->registerProviders();
    }

    /**
     * Register provider.
     *
     * @return $this
     */
    public function registerProviders(): self
    {
        foreach ($this->serviceProviders as $provider) {
            $this->app->register($provider);
        }

        return $this;
    }
}
