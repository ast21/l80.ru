<?php

namespace App\Containers\Comparison\UI\Filament\Resources\ComparisonResource\Pages;

use App\Containers\Comparison\UI\Filament\Resources\ComparisonResource;
use App\Ship\Abstracts\Filament\Pages\AbstractEditRecord;
use Filament\Pages\Actions;

class EditComparison extends AbstractEditRecord
{
    protected static string $resource = ComparisonResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
