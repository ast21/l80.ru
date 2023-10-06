<?php

namespace App\Ship\Providers;

use App\Containers\Achievement\Providers\MainServiceProvider as AchievementServiceProvider;
use App\Containers\TestLanding\Providers\MainServiceProvider as TestLandingServiceProvider;
use App\Ship\Abstracts\Providers\AbstractMainServiceProvider;

class ShipProvider extends AbstractMainServiceProvider
{
    public array $serviceProviders = [
        AuthServiceProvider::class,
        EventServiceProvider::class,
        RouteServiceProvider::class,
        ApiDocsServiceProvider::class,

        // Containers
        TestLandingServiceProvider::class,
        AchievementServiceProvider::class,
    ];
}
