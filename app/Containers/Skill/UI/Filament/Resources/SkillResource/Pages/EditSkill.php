<?php

namespace App\Containers\Skill\UI\Filament\Resources\SkillResource\Pages;

use App\Containers\Skill\UI\Filament\Resources\SkillResource;
use App\Ship\Abstracts\Filament\Pages\AbstractEditRecord;
use Filament\Pages\Actions;

class EditSkill extends AbstractEditRecord
{
    protected static string $resource = SkillResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
