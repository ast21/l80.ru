<?php

namespace App\Containers\Comparison\UI\Filament\Resources;

use App\Containers\Comparison\Models\Comparison;
use App\Containers\Comparison\UI\Filament\Resources\ComparisonResource\Pages;
use App\Ship\Abstracts\Filament\AbstractFilamentResource;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;

class ComparisonResource extends AbstractFilamentResource
{
    protected static ?string $model = Comparison::class;

    protected static ?string $navigationIcon = 'heroicon-o-x-circle';

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
            'index' => Pages\ListComparison::route('/'),
            'create' => Pages\CreateComparison::route('/create'),
            'edit' => Pages\EditComparison::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): ?string
    {
        return __('Comparison');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Comparisons');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('Comparisons');
    }
}
