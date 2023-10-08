<?php

namespace App\Containers\Achievement\UI\Filament\Resources;

use App\Containers\Achievement\Models\Achievement;
use App\Containers\Achievement\UI\Filament\Resources\AchievementResource\Pages;
use App\Ship\Abstracts\Filament\AbstractFilamentResource;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;

class AchievementResource extends AbstractFilamentResource
{
    protected static ?string $model = Achievement::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Title')
                    ->required(),
                TextInput::make('icon_url')
                    ->label('Icon URL')
                    ->url()
                    ->prefixIcon('heroicon-o-link')
                    ->required(),
                Textarea::make('target')
                    ->label('Target')
                    ->rows(4)
                    ->columnSpanFull()
                    ->required(),
                TextInput::make('order')
                    ->label('Order')
                    ->required(),
                TextInput::make('external_url')
                    ->label('External URL')
                    ->url()
                    ->prefixIcon('heroicon-o-globe-alt'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('icon_url')
                    ->label('Icon'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('order')
                    ->sortable()
                    ->label('Order'),
            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->reorderable('order')
            ->defaultSort('order');
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
