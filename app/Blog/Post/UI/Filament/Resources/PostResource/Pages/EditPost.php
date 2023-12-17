<?php

namespace App\Blog\Post\UI\Filament\Resources\PostResource\Pages;

use App\Blog\Post\UI\Filament\Resources\PostResource;
use App\Ship\Abstracts\Filament\Pages\AbstractEditRecord;
use Filament\Pages\Actions;

class EditPost extends AbstractEditRecord
{
    protected static string $resource = PostResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
