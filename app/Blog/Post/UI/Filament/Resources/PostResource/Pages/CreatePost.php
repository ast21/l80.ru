<?php

namespace App\Blog\Post\UI\Filament\Resources\PostResource\Pages;

use App\Blog\Post\UI\Filament\Resources\PostResource;
use App\Ship\Abstracts\Filament\Pages\AbstractCreateRecord;

class CreatePost extends AbstractCreateRecord
{
    protected static string $resource = PostResource::class;

    protected function getActions(): array
    {
        return [
            //
        ];
    }
}
