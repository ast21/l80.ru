<?php

namespace App\Containers\Skill\UI\Filament\Resources\SkillResource\Pages;

use App\Containers\Skill\UI\Filament\Resources\SkillResource;
use App\Ship\Abstracts\Filament\Pages\AbstractCreateRecord;

class CreateSkill extends AbstractCreateRecord
{
    protected static string $resource = SkillResource::class;

    protected function getActions(): array
    {
        return [
            //
        ];
    }
}
