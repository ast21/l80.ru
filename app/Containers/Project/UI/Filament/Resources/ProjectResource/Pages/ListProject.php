<?php

namespace App\Containers\Project\UI\Filament\Resources\ProjectResource\Pages;

use App\Containers\Project\UI\Filament\Resources\ProjectResource;
use App\Ship\Abstracts\Filament\Pages\AbstractListRecords;
use Filament\Pages\Actions;
use Livewire\Attributes\On;

class ListProject extends AbstractListRecords
{
    protected static string $resource = ProjectResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            ProjectResource\Widgets\CreateProjectWidget::class,
            ProjectResource\Widgets\WhichIsBetterWidget::class,
        ];
    }

    #[On('project-created')]
    public function refresh()
    {
    }
}
