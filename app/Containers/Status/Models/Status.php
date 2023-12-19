<?php

namespace App\Containers\Status\Models;

use App\Ship\Abstracts\Models\AbstractModel;

class Status extends AbstractModel
{
    public const UPDATED_AT = null;

    protected $fillable = [
        'name',
    ];
}
