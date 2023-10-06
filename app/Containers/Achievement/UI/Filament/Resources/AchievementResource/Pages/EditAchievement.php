<?php

namespace App\Containers\Achievement\UI\Filament\Resources\AchievementResource\Pages;

use App\Containers\Achievement\UI\Filament\Resources\AchievementResource;
use App\Ship\Abstracts\Filament\Pages\AbstractEditRecord;
use Filament\Pages\Actions;

class EditAchievement extends AbstractEditRecord
{
    protected static string $resource = AchievementResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
