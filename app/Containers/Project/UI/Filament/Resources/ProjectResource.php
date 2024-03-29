<?php

namespace App\Containers\Project\UI\Filament\Resources;

use App\Containers\Project\Enum\ProjectStatus;
use App\Containers\Project\Models\Project;
use App\Containers\Project\UI\Filament\Resources\ProjectResource\Pages;
use App\Ship\Abstracts\Filament\AbstractFilamentResource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use RyanChandler\FilamentProgressColumn\ProgressColumn;

class ProjectResource extends AbstractFilamentResource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-line';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    TextInput::make('title')
                        ->label(__('Title'))
                        ->required()
                        ->columnSpanFull(),
                    RichEditor::make('description')
                        ->label(__('Description'))
                        ->nullable()
                        ->columnSpanFull(),
                ])
                    ->columns(2)
                    ->columnSpan(2),
                Group::make([
                    SpatieMediaLibraryFileUpload::make('image')
                        ->label(__('Image'))
                        ->image()
                        // image auto conversion
                        ->imageResizeMode('cover')
                        ->imageCropAspectRatio('16:9')
                        ->imageResizeTargetWidth('1280')
                        ->imageResizeTargetHeight('720')
                        // image editor
                        ->imageEditor()
                        ->imageEditorAspectRatios(['16:9']),
                    Select::make('status')
                        ->label(__('Status'))
                        ->options(ProjectStatus::class)
                        ->required()
                        ->native(false),
                ])
                    ->columns(1)
                    ->columnSpan(1),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\SpatieMediaLibraryImageColumn::make('image')
                    ->label(__('Image'))
                    ->alignCenter()
                    ->conversion('thumb')
                    ->height(63),
                Tables\Columns\TextColumn::make('title')
                    ->label(__('Title'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->alignCenter()
                    ->color(fn ($state) => $state->color()),
                ProgressColumn::make('progress')
                    ->label(__('Progress'))->progress(function (Project $record) {
                        if ($record->status === ProjectStatus::Done) {
                            return 100;
                        }

                        if ($record->skills_count !== 0) {
                            $doneCount = $record->skills
                                ->filter(function ($skill) {
                                    return ProjectStatus::tryFrom($skill->status_name) === ProjectStatus::Done;
                                })
                                ->count();

                            return floor($doneCount / $record->skills_count * 100);
                        }

                        return 0;
                    }),
                Tables\Columns\TextColumn::make('comparisons')
                    ->label(__('Comparisons'))
                    ->badge()
                    ->alignCenter()
                    ->sortable(query: function (Builder $query, string $direction): Builder {
                        return $query->orderBy('comparisons_count', $direction);
                    })
                    ->getStateUsing(fn (Project $record) => $record->comparisons()->count()),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options(ProjectStatus::toArray()),
            ])
            ->actions([
                Tables\Actions\Action::make('Accept')
                    ->visible(fn (Project $record) => $record->status === ProjectStatus::SomeDay)
                    ->requiresConfirmation()
                    ->action(function (Project $record) {
                        $record->status = ProjectStatus::Processing;
                        $record->save();
                    }),
                Tables\Actions\Action::make('Done')
                    ->visible(fn (Project $record) => $record->status === ProjectStatus::Processing)
                    ->requiresConfirmation()
                    ->action(function (Project $record) {
                        $record->status = ProjectStatus::Done;
                        $record->save();
                    }),
            ])
            ->bulkActions([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            ProjectResource\RelationManagers\SkillsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProject::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): ?string
    {
        return __('Project');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Projects');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('Projects');
    }

    public static function getWidgets(): array
    {
        return [
            ProjectResource\Widgets\CreateProjectWidget::class,
            ProjectResource\Widgets\ComparisonWidget::class,
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->withCount(['comparisons', 'skills']);
    }
}
