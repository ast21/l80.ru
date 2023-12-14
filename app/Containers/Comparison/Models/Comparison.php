<?php

namespace App\Containers\Comparison\Models;

use App\Ship\Abstracts\Models\AbstractModel;

class Comparison extends AbstractModel
{
    protected $fillable = [
        'compared_id',
    ];
}
