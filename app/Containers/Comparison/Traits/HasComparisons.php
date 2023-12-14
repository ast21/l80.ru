<?php

namespace App\Containers\Comparison\Traits;

use App\Containers\Comparison\Models\Comparison;

trait HasComparisons
{
    public function comparisons()
    {
        return $this->morphMany(Comparison::class, 'comparisonable');
    }
}
