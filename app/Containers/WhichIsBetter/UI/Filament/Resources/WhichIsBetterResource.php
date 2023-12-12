<?php

namespace App\Containers\WhichIsBetter\UI\Filament\Resources;

use App\Containers\WhichIsBetter\Models\WhichIsBetter;
use App\Containers\WhichIsBetter\UI\Filament\Resources\WhichIsBetterResource\Pages;
use App\Ship\Abstracts\Filament\AbstractFilamentResource;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;

class WhichIsBetterResource extends AbstractFilamentResource
{
    protected static ?string $model = WhichIsBetter::class;

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
            'index' => Pages\ListWhichIsBetter::route('/'),
            'create' => Pages\CreateWhichIsBetter::route('/create'),
            'edit' => Pages\EditWhichIsBetter::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): ?string
    {
        return __('WhichIsBetter');
    }

    public static function getPluralLabel(): ?string
    {
        return __('WhichIsBetters');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('WhichIsBetters');
    }
}
