<?php

namespace App\Containers\LegacySection\App\Providers;

use App\Ship\Parents\Providers\MainServiceProvider as ParentMainServiceProvider;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class MainServiceProvider extends ParentMainServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        App::register(AuthServiceProvider::class);
//        App::register(BroadcastServiceProvider::class);
        App::register(EventServiceProvider::class);
        App::register(RouteServiceProvider::class);

        parent::register();
    }

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
