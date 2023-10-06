<?php

namespace App\Containers\Achievements\Models;

use App\Containers\Achievements\Database\Factories\AchievementFactory;
use App\Ship\Abstracts\Models\AbstractModel;

class Achievement extends AbstractModel
{
    protected $fillable = [
        //
    ];

    protected static function newFactory(): AchievementFactory
    {
        return new AchievementFactory();
    }
}
