<?php

namespace App\Containers\WhichIsBetter\Models;

use App\Ship\Abstracts\Models\AbstractModel;

class WhichIsBetter extends AbstractModel
{
    protected $fillable = [
        'key',
        'better_id',
        'compared_id',
    ];
}
