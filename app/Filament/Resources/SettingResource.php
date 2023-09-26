<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms\Components\FileUpload;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('Company_name'),
                TextInput::make('Company_phone'),
                TextInput::make('Company_address'),
                TextInput::make('Company_location'),
                TextInput::make('Company_email'),
                TextInput::make('Company_facebook'),
                TextInput::make('Company_instagram'),
                TextInput::make('Company_twitter'),
                TextInput::make('Company_linkdin'),
                FileUpload::make('Company_logo'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Company_name'),
                TextColumn::make('Company_phone'),
                TextColumn::make('Company_address'),
                TextColumn::make('Company_location'),
                TextColumn::make('Company_email'),
                TextColumn::make('Company_facebook'),
                TextColumn::make('Company_instagram'),
                TextColumn::make('Company_twitter'),
                TextColumn::make('Company_linkdin'),
                ImageColumn::make('Company_logo'),
            ])
            ->filters([
                
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }    
}
