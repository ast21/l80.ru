<?php

namespace App\Containers\WhichIsBetter\UI\Filament\Resources\WhichIsBetterResource\Pages;

use App\Containers\WhichIsBetter\UI\Filament\Resources\WhichIsBetterResource;
use App\Ship\Abstracts\Filament\Pages\AbstractCreateRecord;

class CreateWhichIsBetter extends AbstractCreateRecord
{
    protected static string $resource = WhichIsBetterResource::class;

    protected function getActions(): array
    {
        return [
            //
        ];
    }
}
