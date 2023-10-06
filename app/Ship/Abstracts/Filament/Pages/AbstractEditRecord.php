<?php

namespace App\Ship\Abstracts\Filament\Pages;

use Filament\Resources\Pages\EditRecord;

abstract class AbstractEditRecord extends EditRecord
{
    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl();
    }
}
