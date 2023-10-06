<?php

namespace App\Containers\Achievements\UI\Filament\Resources\AchievementResource\Pages;

use App\Containers\Achievements\UI\Filament\Resources\AchievementResource;
use App\Ship\Abstracts\Filament\Pages\AbstractCreateRecord;

class CreateAchievement extends AbstractCreateRecord
{
    protected static string $resource = AchievementResource::class;

    protected function getActions(): array
    {
        return [
            //
        ];
    }
}
