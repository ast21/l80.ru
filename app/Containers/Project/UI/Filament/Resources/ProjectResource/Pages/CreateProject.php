<?php

namespace App\Containers\Project\UI\Filament\Resources\ProjectResource\Pages;

use App\Containers\Project\UI\Filament\Resources\ProjectResource;
use App\Ship\Abstracts\Filament\Pages\AbstractCreateRecord;

class CreateProject extends AbstractCreateRecord
{
    protected static string $resource = ProjectResource::class;

    protected function getActions(): array
    {
        return [
            //
        ];
    }
}
