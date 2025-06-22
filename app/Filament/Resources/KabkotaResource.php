<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KabkotaResource\Pages;
use App\Filament\Resources\KabkotaResource\RelationManagers;
use App\Models\Kabkota;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class KabkotaResource extends Resource
{
    protected static ?string $model = Kabkota::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // Tambahan ini
    protected static ?string $navigationLabel = 'Kabkota';
    protected static ?string $label = 'Kabkota';
    protected static ?string $pluralLabel = 'Kabkota';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required()
                    ->maxLength(45),
                TextInput::make('latitude')
                    ->numeric()
                    ->required(),
                TextInput::make('longtitude')
                    ->numeric()
                    ->required(),
                Select::make('provinsi_id')
                    ->relationship('provinsi', 'nama') // pastikan relasi sudah ada di model Kota
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('nama')->searchable(),
                TextColumn::make('latitude'),
                TextColumn::make('longtitude'),
                TextColumn::make('provinsi.nama'), // pastikan relasi sudah ada
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListKabkota::route('/'),
            'create' => Pages\CreateKabkota::route('/create'),
            'edit' => Pages\EditKabkota::route('/{record}/edit'),
        ];
    }
}
