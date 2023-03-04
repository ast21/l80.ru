<?php

namespace App\Ship\Parents\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

/**
 * Class BroadcastServiceProvider
 *
 * A.K.A. app/Providers/BroadcastServiceProvider.php
 */
abstract class ParentBroadcastServiceProvider extends LaravelServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        require app_path('Ship/Broadcasts/channels.php');
    }
}
