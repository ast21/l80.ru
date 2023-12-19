<?php

namespace App\Ship\Providers;

use App\Blog\Category\Providers\MainServiceProvider as CategoryServiceProvider;
use App\Blog\Post\Providers\MainServiceProvider as PostServiceProvider;
use App\Containers\Achievement\Providers\MainServiceProvider as AchievementServiceProvider;
use App\Containers\Comparison\Providers\MainServiceProvider as ComparisonServiceProvider;
use App\Containers\Project\Providers\MainServiceProvider as ProjectServiceProvider;
use App\Containers\Skill\Providers\MainServiceProvider as SkillServiceProvider;
use App\Containers\Status\Providers\MainServiceProvider as StatusServiceProvider;
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
        ProjectServiceProvider::class,
        ComparisonServiceProvider::class,
        SkillServiceProvider::class,
        CategoryServiceProvider::class,
        PostServiceProvider::class,
        StatusServiceProvider::class,
    ];
}
