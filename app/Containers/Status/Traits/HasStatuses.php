<?php

namespace App\Containers\Status\Traits;

use App\Containers\Status\Models\Status;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasStatuses
{
    public function statuses(): MorphMany
    {
        return $this->morphMany(Status::class, 'statusable');
    }

    public function status(): MorphOne
    {
        return $this->morphOne(Status::class, 'statusable');
    }

    public function getStatusNameAttribute()
    {
        return $this->status?->name;
    }
}
