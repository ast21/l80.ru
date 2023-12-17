<?php

namespace App\Blog\Post\UI\Filament\Resources\PostResource\Pages;

use App\Blog\Post\UI\Filament\Resources\PostResource;
use App\Ship\Abstracts\Filament\Pages\AbstractListRecords;
use Filament\Actions;

class ListPosts extends AbstractListRecords
{
    protected static string $resource = PostResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
