<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PembinaResource\Pages;
use App\Models\Pembina;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class PembinaResource extends Resource
{
    protected static ?string $model = Pembina::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // Tambahkan ini
    protected static ?string $navigationLabel = 'Pembina';
    protected static ?string $label = 'Pembina';
    protected static ?string $pluralLabel = 'Pembina';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required()
                    ->maxLength(45),
                Select::make('gender')
                    ->options([
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    ])
                    ->required(),
                DatePicker::make('tgl_lahir')
                    ->required(),
                TextInput::make('tmp_lahir')
                    ->label('Tempat Lahir')
                    ->required()
                    ->maxLength(30),
                TextInput::make('keahlian')
                    ->required()
                    ->maxLength(100),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('nama')->searchable(),
                TextColumn::make('gender')->label('Gender'),
                TextColumn::make('tgl_lahir')->label('Tanggal Lahir'),
                TextColumn::make('tmp_lahir')->label('Tempat Lahir'),
                TextColumn::make('keahlian')->label('Keahlian'),
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
            'index' => Pages\ListPembinas::route('/'),
            'create' => Pages\CreatePembina::route('/create'),
            'edit' => Pages\EditPembina::route('/{record}/edit'),
        ];
    }
}