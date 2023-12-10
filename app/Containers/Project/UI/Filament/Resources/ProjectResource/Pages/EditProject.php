<?php

namespace App\Containers\Project\UI\Filament\Resources\ProjectResource\Pages;

use App\Containers\Project\UI\Filament\Resources\ProjectResource;
use App\Ship\Abstracts\Filament\Pages\AbstractEditRecord;
use Filament\Pages\Actions;

class EditProject extends AbstractEditRecord
{
    protected static string $resource = ProjectResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
