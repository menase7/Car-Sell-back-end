<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarsResource\Pages;
use App\Filament\Resources\CarsResource\RelationManagers;
use App\Models\Cars;
use App\Models\Brands;
use App\Models\Brands\RelationManagers\BrandsRelationManager;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;

class CarsResource extends Resource
{
    protected static ?string $model = Cars::class;

    protected static ?string $navigationIcon = 'heroicon-s-shopping-bag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('description'),
                TextInput::make('price'),
                TextInput::make('discounted_price'),
                FileUpload::make('images'),
                // Select::make('brands_id')
                // ->label('Brand')
                // ->options(Brands::all()->pluck('name', 'id')),
                Select::make('status')->options([
                    'Active' => 'Active',
                    'Inactive' => 'Inactive',
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('description'),
                TextColumn::make('price'),
                TextColumn::make('discounted_price'),
                ImageColumn::make('images'),
                ImageColumn::make('brands.name'),
                TextColumn::make('status'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            // BrandsRelationManager::class
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCars::route('/create'),
            'edit' => Pages\EditCars::route('/{record}/edit'),
        ];
    }    
}
