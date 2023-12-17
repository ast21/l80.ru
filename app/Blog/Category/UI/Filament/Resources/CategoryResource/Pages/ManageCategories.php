<?php

namespace App\Blog\Category\UI\Filament\Resources\CategoryResource\Pages;

use App\Blog\Category\UI\Filament\Imports\CategoryImporter;
use App\Blog\Category\UI\Filament\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCategories extends ManageRecords
{
    protected static string $resource = CategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ImportAction::make()
                ->importer(CategoryImporter::class),
            Actions\CreateAction::make(),
        ];
    }
}
