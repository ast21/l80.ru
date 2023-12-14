<?php

declare(strict_types=1);

namespace App\Containers\Comparison\DTO;

use Illuminate\Support\Collection;
use Spatie\LaravelData\Data;

class ComparisonDto extends Data
{
    /** @var Collection<int> $data */
    public Collection $data;
    public ?int $left;
    public ?int $right;
}