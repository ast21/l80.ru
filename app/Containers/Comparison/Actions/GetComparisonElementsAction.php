<?php

declare(strict_types=1);

namespace App\Containers\Comparison\Actions;

use App\Containers\Comparison\DTO\ComparisonDto;
use App\Containers\Comparison\Models\Comparison;
use App\Containers\Project\Models\Project;
use App\Ship\Abstracts\Actions\AbstractAction;

class GetComparisonElementsAction extends AbstractAction
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
        $comparedData = Comparison::where('comparisonable_type', Project::class)
            ->get()
            ->map(fn($row) => "$row->comparisonable_id:$row->compared_id");
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