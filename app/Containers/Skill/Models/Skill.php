<?php

namespace App\Containers\Skill\Models;

use App\Containers\Project\Models\Project;
use App\Containers\Status\Traits\HasStatuses;
use App\Ship\Abstracts\Models\AbstractModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Skill extends AbstractModel
{
    use HasStatuses;

    protected $fillable = [
        'title',
        'description',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
