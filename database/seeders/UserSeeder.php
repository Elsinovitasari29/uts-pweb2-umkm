<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin111@gmail.com',
            'password' => Hash::make('admin111'),
        ]);
        $admin->assignRole('super_admin');

        $test = User::create([
            'name' => 'View',
            'email' => 'view111@gmail.com',
            'password' => Hash::make('view111'),
        ]);
        $test->assignRole('view');

        $editor = User::create([
            'name' => 'Editor',
            'email' => 'editor111@gmail.com',
            'password' => Hash::make('password123'),
        ]);
        $editor->assignRole('Editor');
    }
}