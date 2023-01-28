<?php

namespace Modules\GenderParty;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Modules\GenderParty\Models\Vote;
use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;

class GenderPartyServiceProvider extends ServiceProvider
{
    public function boot(Dashboard $dashboard)
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        // routes
        Route::domain((string)config('platform.domain'))
            ->prefix(Dashboard::prefix('/'))
            ->middleware(config('platform.middleware.private'))
            ->group(__DIR__ . '/../routes/platform.php');

        Route::middleware('api')
            ->prefix('api/gp')
            ->group(__DIR__ . '/../routes/api.php');

        // permissions
        $permissions = ItemPermission::group('Gender Party')
            ->addPermission(Vote::PERMISSION, 'Votes');
        $dashboard->registerPermissions($permissions);
    }
}
