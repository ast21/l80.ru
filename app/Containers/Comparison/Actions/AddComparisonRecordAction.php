<?php

declare(strict_types=1);

namespace App\Containers\Comparison\Actions;

use App\Containers\Comparison\Models\Comparison;
use App\Ship\Abstracts\Actions\AbstractAction;

class AddComparisonRecordAction extends AbstractAction
{
    public function run(string $key, int $betterId, int $comparedId): void
    {
        Comparison::create([
            'key' => $key,
            'better_id' => $betterId,
            'compared_id' => $comparedId,
        ]);
    }
}