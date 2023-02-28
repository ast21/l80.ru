<?php

namespace App\Containers\LegacySection\App\Providers;

use App\Ship\Parents\Providers\MainServiceProvider as ParentMainServiceProvider;
use Illuminate\Http\Resources\Json\JsonResource;

class MainServiceProvider extends ParentMainServiceProvider
{
    public array $serviceProviders = [
        AuthServiceProvider::class,
//        BroadcastServiceProvider::class,
        EventServiceProvider::class,
        RouteServiceProvider::class,
        PlatformServiceProvider::class,
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        JsonResource::withoutWrapping();

        parent::register();
    }
}
