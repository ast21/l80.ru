<?php

namespace App\Containers\Project\UI\Filament\Resources\ProjectResource\Widgets;

use App\Containers\Project\Models\Project;
use App\Containers\WhichIsBetter\Actions\AddComparisonRecordAction;
use App\Containers\WhichIsBetter\Actions\GetComparisonItemsAction;
use App\Containers\WhichIsBetter\DTO\ComparisonDto;
use Filament\Widgets\Widget;

class WhichIsBetterWidget extends Widget
{
    protected static string $view = 'container@Project::filament.resources.project-resource.widgets.which-is-better-widget';

    public ?Project $left = null;
    public ?Project $right = null;

    public function mount(): void
    {
        $comparisonDto = ComparisonDto::from([
            'key' => 'projects',
            'data' => Project::select('id')->orderBy('id')->get()->pluck('id'),
        ]);

        $comparisonDto = app(GetComparisonItemsAction::class)->run($comparisonDto);

        $this->left = Project::find($comparisonDto->left);
        $this->right = Project::find($comparisonDto->right);
    }

    public function selectLeft(): void
    {
        if ($this->left && $this->right) {
            app(AddComparisonRecordAction::class)->run('projects', $this->left->id, $this->right->id);
            $this->mount();
        }
    }

    public function selectRight(): void
    {
        if ($this->left && $this->right) {
            app(AddComparisonRecordAction::class)->run('projects', $this->right->id, $this->left->id);
            $this->mount();
        }
    }
}
