<?php

namespace App\Containers\Skill\UI\Filament\Resources;

use App\Containers\Skill\Enum\SkillStatus;
use App\Containers\Skill\Models\Skill;
use App\Containers\Skill\UI\Filament\Resources\SkillResource\Pages;
use App\Ship\Abstracts\Filament\AbstractFilamentResource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class SkillResource extends AbstractFilamentResource
{
    protected static ?string $model = Skill::class;

    protected static ?string $navigationIcon = 'heroicon-o-bolt';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    TextInput::make('title')
                        ->label(__('Title'))
                        ->required(),
                    Select::make('project')
                        ->relationship('project', 'title'),
                    RichEditor::make('description')
                        ->label(__('Description'))
                        ->nullable()
                        ->columnSpanFull(),
                ])
                    ->columns(2)
                    ->columnSpan(2),
                Group::make()
                    ->relationship('status')
                    ->schema([
                        Select::make('name')
                            ->label(__('Status'))
                            ->options(SkillStatus::class)
                            ->required(),
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
                Tables\Columns\TextColumn::make('id')
                    ->label(__('ID'))
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->label(__('Title'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->label(__('Status'))
                    ->getStateUsing(fn (Skill $record) => $record->status->name)
                    ->badge()
                    ->alignCenter()
                    ->color(fn ($state) => SkillStatus::tryFrom($state)?->color()),
                Tables\Columns\TextColumn::make('project.title')
                    ->label(__('Project')),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('project')
                    ->label(__('Project'))
                    ->relationship('project', 'title'),
                Tables\Filters\SelectFilter::make('status')
                    ->label(__('Status'))
                    ->relationship('status', 'name'),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSkill::route('/'),
            'create' => Pages\CreateSkill::route('/create'),
            'edit' => Pages\EditSkill::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): ?string
    {
        return __('Skill');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Skills');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('Skills');
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->with('status');
    }
}
