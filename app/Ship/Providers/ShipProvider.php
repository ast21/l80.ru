<?php

namespace App\Ship\Providers;

use App\Containers\Achievement\Providers\MainServiceProvider as AchievementServiceProvider;
use App\Containers\Project\Providers\MainServiceProvider as ProjectServiceProvider;
use App\Containers\Skill\Providers\MainServiceProvider as SkillServiceProvider;
use App\Containers\TestLanding\Providers\MainServiceProvider as TestLandingServiceProvider;
use App\Containers\WhichIsBetter\Providers\MainServiceProvider as WhichIsBetterServiceProvider;
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
        ProjectServiceProvider::class,
        WhichIsBetterServiceProvider::class,
        SkillServiceProvider::class,
    ];
}
