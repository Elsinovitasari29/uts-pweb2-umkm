<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UmkmResource\Pages;
use App\Models\Umkm;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Support\Facades\Storage;

class UmkmResource extends Resource
{
    protected static ?string $model = Umkm::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')->required()->maxLength(45),
                TextInput::make('modal')->numeric()->required(),
                TextInput::make('pemilik')->required()->maxLength(45),
                TextInput::make('alamat')->required()->maxLength(100),
                TextInput::make('website')->maxLength(45),
                TextInput::make('email')->email()->maxLength(45),
                Select::make('kabkota_id')
                    ->relationship('kabkota', 'nama')
                    ->required(),
                TextInput::make('rating')->numeric()->required(),
                Select::make('kategori_umkm_id')
                    ->relationship('kategoriUmkm', 'nama')
                    ->required(),
                Select::make('pembina_id')
                    ->relationship('pembina', 'nama')
                    ->required(),
                FileUpload::make('foto')
                
                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('nama')->searchable(),
                TextColumn::make('modal'),
                ImageColumn::make('foto'),
                TextColumn::make('pemilik'),
                TextColumn::make('alamat'),
                TextColumn::make('website'),
                TextColumn::make('email'),
                TextColumn::make('kabkota.nama')->label('Kab/Kota'),
                TextColumn::make('rating'),
                TextColumn::make('kategoriUmkm.nama')->label('Kategori'),
                TextColumn::make('pembina.nama')->label('Pembina'),
                
                
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
            'index' => Pages\ListUmkms::route('/'),
            'create' => Pages\CreateUmkm::route('/create'),
            'edit' => Pages\EditUmkm::route('/{record}/edit'),
        ];
    }
}