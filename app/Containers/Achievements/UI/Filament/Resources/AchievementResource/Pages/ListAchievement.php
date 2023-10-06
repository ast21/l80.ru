<?php

namespace App\Containers\Achievements\UI\Filament\Resources\AchievementResource\Pages;

use App\Containers\Achievements\UI\Filament\Resources\AchievementResource;
use App\Ship\Abstracts\Filament\Pages\AbstractListRecords;
use Filament\Pages\Actions;

class ListAchievement extends AbstractListRecords
{
    protected static string $resource = AchievementResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
