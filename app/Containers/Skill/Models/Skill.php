<?php

namespace App\Containers\Skill\Models;

use App\Containers\Project\Models\Project;
use App\Ship\Abstracts\Models\AbstractModel;

class Skill extends AbstractModel
{
    protected $fillable = [
        'title',
        'description',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
