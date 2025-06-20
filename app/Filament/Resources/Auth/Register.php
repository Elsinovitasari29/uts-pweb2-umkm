<?php

namespace App\Filament\Resources\Auth;

use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;

// Catatan: Pastikan AuthRegister memang ada di versi Filament kamu.
// Jika tidak, hapus extends dan buat Livewire component sendiri.
class Register // extends AuthRegister
{
    public function form(Form $form): Form
    {
         return $form->schema([
            $this->getNameFormComponent(),
            $this->getEmailFormComponent(),
            $this->getPasswordFormComponent(),
            $this->getPasswordConfirmationFormComponent(),

            TextInput::make('data.nama')
                ->label('Nama Lengkap')
                ->required()
                ->maxLength(255),
        ])
        ->statePath('data');
    }
}