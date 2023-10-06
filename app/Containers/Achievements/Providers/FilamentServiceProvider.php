<?php

namespace App\Containers\Achievement\Providers;

use App\Containers\Achievement\UI\Filament\Resources\AchievementResource;
use App\Ship\Abstracts\Providers\AbstractFilamentServiceProvider;

class FilamentServiceProvider extends AbstractFilamentServiceProvider
{
    public static string $name = 'achievement';

    protected array $resources = [
        AchievementResource::class,
    ];
}
