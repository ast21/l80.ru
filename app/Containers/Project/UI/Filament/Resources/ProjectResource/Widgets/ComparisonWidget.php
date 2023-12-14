<?php

namespace App\Containers\Project\UI\Filament\Resources\ProjectResource\Widgets;

use App\Containers\Comparison\Actions\GetComparisonElementsAction;
use App\Containers\Comparison\DTO\ComparisonDto;
use App\Containers\Project\Models\Project;
use Filament\Widgets\Widget;

class ComparisonWidget extends Widget
{
    protected static string $view = 'container@Project::filament.resources.project-resource.widgets.comparison-widget';

    public ?Project $left = null;
    public ?Project $right = null;

    public function mount(): void
    {
        $comparisonDto = ComparisonDto::from([
            'data' => Project::select('id')->orderBy('id')->get()->pluck('id'),
        ]);

        $comparisonDto = app(GetComparisonElementsAction::class)->run($comparisonDto);

        $this->left = Project::find($comparisonDto->left);
        $this->right = Project::find($comparisonDto->right);
    }

    public function selectLeft(): void
    {
        if ($this->left && $this->right) {
            $this->left->comparisons()->create(['compared_id' => $this->right->id]);
            $this->mount();
            $this->dispatch('project-compared');
        }
    }

    public function selectRight(): void
    {
        if ($this->left && $this->right) {
            $this->right->comparisons()->create(['compared_id' => $this->left->id]);
            $this->dispatch('project-compared');
            $this->mount();
        }
    }
}
