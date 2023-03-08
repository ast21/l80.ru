<?php

namespace App\Ship\Parents\Providers;

use AdminKit\Porto\Abstracts\Providers\BroadcastServiceProvider as AbstractBroadcastServiceProvider;
use Illuminate\Support\Facades\Broadcast;

abstract class ParentBroadcastServiceProvider extends AbstractBroadcastServiceProvider
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
