<?php

namespace App\Containers\WhichIsBetter\UI\Filament\Resources\WhichIsBetterResource\Pages;

use App\Containers\WhichIsBetter\UI\Filament\Resources\WhichIsBetterResource;
use App\Ship\Abstracts\Filament\Pages\AbstractEditRecord;
use Filament\Pages\Actions;

class EditWhichIsBetter extends AbstractEditRecord
{
    protected static string $resource = WhichIsBetterResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
