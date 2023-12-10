<?php

namespace App\Containers\Project\UI\Filament\Resources\ProjectResource\Widgets;

use App\Containers\Project\Models\Project;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Widgets\Widget;

class CreateProjectWidget extends Widget implements HasForms
{
    use InteractsWithForms;

    protected static string $view = 'container@Project::filament.resources.project-resource.widgets.add-project-widget';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->hiddenLabel()
                    ->placeholder(__('Quick create project'))
                    ->required(),
            ])
            ->statePath('data');
    }

    public function create(): void
    {
        Project::create($this->form->getState());
        $this->form->fill();
        $this->dispatch('project-created');
    }
}
