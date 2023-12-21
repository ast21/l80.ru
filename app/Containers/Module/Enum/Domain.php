<?php

declare(strict_types=1);

namespace App\Containers\Module\Enum;

enum Domain: string
{
    case Main = 'l80.ru';
    case One = 'one.l80.ru';
    case Achievements = 'achievements.l80.ru';

    public function setUrlConfig(): void
    {
        config()->set('app.url', 'https://'.$this->value);
        config()->set('app.asset_url', 'https://'.$this->value);
    }
}
