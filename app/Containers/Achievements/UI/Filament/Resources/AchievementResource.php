<?php

namespace App\Containers\Achievements\UI\Filament\Resources;

use App\Containers\Achievements\Models\Achievement;
use App\Containers\Achievements\UI\Filament\Resources\AchievementResource\Pages;
use App\Ship\Abstracts\Filament\AbstractFilamentResource;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Tables;

class AchievementResource extends AbstractFilamentResource
{
    protected static ?string $model = Achievement::class;

    protected static ?string $navigationIcon = 'heroicon-o-x';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListAchievement::route('/'),
            'create' => Pages\CreateAchievement::route('/create'),
            'edit' => Pages\EditAchievement::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): ?string
    {
        return __('Achievement');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Achievements');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('Achievements');
    }
}
