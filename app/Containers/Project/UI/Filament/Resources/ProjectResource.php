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
//                Tables\Columns\TextColumn::make('id')
//                    ->label(__('ID'))
//                    ->sortable(),
                Tables\Columns\SpatieMediaLibraryImageColumn::make('image')
                    ->label(__('Image'))
                    ->conversion('thumb')
                    ->height(63),
                Tables\Columns\TextColumn::make('title')
                    ->label(__('Title'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn($state) => ProjectStatus::from($state)->color()),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
                //
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
            ProjectResource\Widgets\WhichIsBetterWidget::class,
        ];
    }


}
