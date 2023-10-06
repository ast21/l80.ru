<?php

namespace App\Ship\Abstracts\Filament\Pages;

use Filament\Resources\Pages\CreateRecord;

abstract class AbstractCreateRecord extends CreateRecord
{
    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl();
    }
}
