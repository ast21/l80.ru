<?php

namespace App\Ship\Providers;

use App\Ship\Abstracts\Providers\AbstractMainServiceProvider;
use App\Containers\TestLanding\Providers\MainServiceProvider as TestLandingServiceProvider;

class ShipProvider extends AbstractMainServiceProvider
{
    public array $serviceProviders = [
        AuthServiceProvider::class,
        EventServiceProvider::class,
        RouteServiceProvider::class,
        ApiDocsServiceProvider::class,

        // Containers
        TestLandingServiceProvider::class,
    ];
}
