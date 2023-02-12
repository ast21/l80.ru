<?php

namespace App\Containers\LegacySection\App\Providers;

use App\Ship\Parents\Providers\BroadcastServiceProvider as ParentBroadcastServiceProvider;

class BroadcastServiceProvider extends ParentBroadcastServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
