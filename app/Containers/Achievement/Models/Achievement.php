<?php

namespace App\Containers\Achievement\Models;

use App\Containers\Achievement\Database\Factories\AchievementFactory;
use App\Ship\Abstracts\Models\AbstractModel;

class Achievement extends AbstractModel
{
    protected $fillable = [
        'title',
        'target',
        'icon_url',
        'external_url',
        'order',
    ];

    protected static function newFactory(): AchievementFactory
    {
        return new AchievementFactory();
    }
}
