<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageCommentsResource\Pages;
use App\Filament\Resources\PageCommentsResource\RelationManagers;
use App\Models\PageComments;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;

class PageCommentsResource extends Resource
{
    protected static ?string $model = PageComments::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('page_id')
                ->relationship('pagee', 'title')
                ->label('pages'),
                Textarea::make('comment')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('pagee.title'),
                TextColumn::make('comment'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListPageComments::route('/'),
            'create' => Pages\CreatePageComments::route('/create'),
            'edit' => Pages\EditPageComments::route('/{record}/edit'),
        ];
    }
}
