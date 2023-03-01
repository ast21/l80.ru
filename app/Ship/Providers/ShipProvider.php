<?php

namespace App\Ship\Providers;

use App\Ship\Commands\HelloWorldCommand;
use App\Ship\Commands\MakeInterfaceCommand;
use App\Ship\Parents\Providers\MainServiceProvider as ParentMainServiceProvider;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;

class ShipProvider extends ParentMainServiceProvider
{
    public array $commands = [
        HelloWorldCommand::class,
        MakeInterfaceCommand::class,
    ];

    public array $serviceProviders = [
        PlatformProvider::class,
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
         * require helpers.php file
         */
        require_once(__DIR__ . '/../Helpers/helpers.php');

        /**
         * Load the ide-helper service provider only in non production environments.
         */
        if ($this->app->isLocal()) {
            $this->app->register(IdeHelperServiceProvider::class);
        }

        parent::register();
    }
}
