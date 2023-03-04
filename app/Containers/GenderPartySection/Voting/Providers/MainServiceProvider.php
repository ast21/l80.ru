<?php

declare(strict_types=1);

namespace App\Containers\GenderPartySection\Voting\Providers;

use App\Ship\Parents\Providers\ParentMainServiceProvider;
use Illuminate\Support\Facades\Route;
use Orchid\Platform\Dashboard;

class MainServiceProvider extends ParentMainServiceProvider
{
    public array $serviceProviders = [
        PlatformServiceProvider::class,
    ];

    public function boot(): void
    {
        parent::boot();

        $this->loadMigrationsFrom(__DIR__ . '/../Data/Migrations');

        // routes
        Route::domain((string)config('platform.domain'))
            ->prefix(Dashboard::prefix('/'))
            ->middleware(config('platform.middleware.private'))
            ->group(__DIR__ . '/../UI/Platform/Routes/platform.php');

        Route::middleware('api')
            ->prefix('api/gp')
            ->group(__DIR__ . '/../UI/API/Routes/api.php');
    }
}
