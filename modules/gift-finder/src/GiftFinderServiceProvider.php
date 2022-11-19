<?php

namespace Modules\GiftFinder;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;

class GiftFinderServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot(Dashboard $dashboard)
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        // routes
        Route::domain((string)config('platform.domain'))
            ->prefix(Dashboard::prefix('/'))
            ->middleware(config('platform.middleware.private'))
            ->group(__DIR__ . '/../routes/platform.php');

        // permissons
        $permissions = ItemPermission::group('Gift Finder')
            ->addPermission('platform.gf', 'Gift Finder');
        $dashboard->registerPermissions($permissions);
    }
}
