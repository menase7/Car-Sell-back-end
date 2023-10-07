<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimoniesResource\Pages;
use App\Filament\Resources\TestimoniesResource\RelationManagers;
use App\Models\Testimonies;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;



class TestimoniesResource extends Resource
{
    protected static ?string $model = Testimonies::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('customer_id')->required(),
                TextInput::make('cars_id')->required(),
                TextInput::make('name')->required(),
                TextInput::make('message')->required(),
                FileUpload::make('image')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('customer_id'),
                TextColumn::make('cars_id'),
                TextColumn::make('name'),
                TextColumn::make('message'),
                ImageColumn::make('image'),
            ])
            ->filters([
                
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
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTestimonies::route('/'),
            'create' => Pages\CreateTestimonies::route('/create'),
            'edit' => Pages\EditTestimonies::route('/{record}/edit'),
        ];
    }    
}
