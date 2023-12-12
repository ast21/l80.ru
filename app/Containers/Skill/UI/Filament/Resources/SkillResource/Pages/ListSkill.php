<?php

namespace App\Containers\Skill\UI\Filament\Resources\SkillResource\Pages;

use App\Containers\Skill\UI\Filament\Resources\SkillResource;
use App\Ship\Abstracts\Filament\Pages\AbstractListRecords;
use Filament\Pages\Actions;

class ListSkill extends AbstractListRecords
{
    protected static string $resource = SkillResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
