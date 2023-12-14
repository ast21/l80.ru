<?php

namespace App\Containers\Comparison\UI\Filament\Resources\ComparisonResource\Pages;

use App\Containers\Comparison\UI\Filament\Resources\ComparisonResource;
use App\Ship\Abstracts\Filament\Pages\AbstractListRecords;
use Filament\Pages\Actions;

class ListComparison extends AbstractListRecords
{
    protected static string $resource = ComparisonResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
