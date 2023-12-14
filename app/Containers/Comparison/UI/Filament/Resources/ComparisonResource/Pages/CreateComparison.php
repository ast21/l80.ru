<?php

namespace App\Containers\Comparison\UI\Filament\Resources\ComparisonResource\Pages;

use App\Containers\Comparison\UI\Filament\Resources\ComparisonResource;
use App\Ship\Abstracts\Filament\Pages\AbstractCreateRecord;

class CreateComparison extends AbstractCreateRecord
{
    protected static string $resource = ComparisonResource::class;

    protected function getActions(): array
    {
        return [
            //
        ];
    }
}
