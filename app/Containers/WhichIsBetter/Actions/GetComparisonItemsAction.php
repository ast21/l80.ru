<?php

declare(strict_types=1);

namespace App\Containers\WhichIsBetter\Actions;

use App\Containers\WhichIsBetter\DTO\ComparisonDto;
use App\Containers\WhichIsBetter\Models\WhichIsBetter;
use App\Ship\Abstracts\Actions\AbstractAction;

class GetComparisonItemsAction extends AbstractAction
{
    public function run(ComparisonDto $comparisonDto): ComparisonDto
    {
        $comparisonData = collect();
        $comparisonDto->data->each(function ($element) use ($comparisonDto, $comparisonData) {
            foreach ($comparisonDto->data as $datum) {
                if ($datum === $element) {
                    continue;
                }

                $comparisonData->add("$element:$datum");
            }
        });
        $comparedData = WhichIsBetter::where('key', $comparisonDto->key)
            ->get()
            ->map(fn($row) => "$row->better_id:$row->compared_id");
        $comparisonData = $comparisonData->diff($comparedData);
        $comparisonData = $comparisonData->diff(
            $comparedData->map(fn($row) => implode(':', array_reverse(explode(':', $row))))
        );

        if ($comparisonData->count() > 0) {
            $element = (string)$comparisonData->random();

            $comparisonDto->left = (int)explode(':', $element)[0];
            $comparisonDto->right = (int)explode(':', $element)[1];
        }

        return $comparisonDto;
    }
}