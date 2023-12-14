<?php

namespace App\Containers\Comparison\Models;

use App\Ship\Abstracts\Models\AbstractModel;

class Comparison extends AbstractModel
{
    protected $fillable = [
        'key',
        'better_id',
        'compared_id',
    ];
}
