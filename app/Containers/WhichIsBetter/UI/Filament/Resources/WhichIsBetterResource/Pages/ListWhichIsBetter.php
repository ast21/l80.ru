<?php

namespace App\Containers\WhichIsBetter\UI\Filament\Resources\WhichIsBetterResource\Pages;

use App\Containers\WhichIsBetter\UI\Filament\Resources\WhichIsBetterResource;
use App\Ship\Abstracts\Filament\Pages\AbstractListRecords;
use Filament\Pages\Actions;

class ListWhichIsBetter extends AbstractListRecords
{
    protected static string $resource = WhichIsBetterResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
