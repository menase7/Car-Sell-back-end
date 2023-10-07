<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderDetailsResource\Pages;
use App\Filament\Resources\OrderDetailsResource\RelationManagers;
use App\Models\Order_details;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class OrderDetailsResource extends Resource
{
    protected static ?string $model = Order_details::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder-plus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                 TextInput::make('order_id'),
                 TextInput::make('product_id'),
                 TextInput::make('price'),
                 TextInput::make('qty'),
                 TextInput::make('total'),
            ]);
    }
 
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('order_id'),
                TextColumn::make('product_id'),
                TextColumn::make('price'),
                TextColumn::make('qty'),
                TextColumn::make('total'),
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
            'index' => Pages\ListOrderDetails::route('/'),
            'create' => Pages\CreateOrderDetails::route('/create'),
            'edit' => Pages\EditOrderDetails::route('/{record}/edit'),
        ];
    }    
}
