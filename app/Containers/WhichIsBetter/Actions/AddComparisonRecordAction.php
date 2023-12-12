<?php

declare(strict_types=1);

namespace App\Containers\WhichIsBetter\Actions;

use App\Containers\WhichIsBetter\Models\WhichIsBetter;
use App\Ship\Abstracts\Actions\AbstractAction;

class AddComparisonRecordAction extends AbstractAction
{
    public function run(string $key, int $betterId, int $comparedId): void
    {
        WhichIsBetter::create([
            'key' => $key,
            'better_id' => $betterId,
            'compared_id' => $comparedId,
        ]);
    }
}