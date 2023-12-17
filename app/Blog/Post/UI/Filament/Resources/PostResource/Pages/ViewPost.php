<?php

namespace App\Blog\Post\UI\Filament\Resources\PostResource\Pages;

use App\Blog\Post\UI\Filament\Resources\PostResource;
use App\Ship\Abstracts\Filament\Pages\AbstractEditRecord;

class ViewPost extends AbstractEditRecord
{
    protected static string $resource = PostResource::class;

    protected function getActions(): array
    {
        return [
            //
        ];
    }
}
