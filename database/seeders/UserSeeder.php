<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $rootAdmin = User::create([
            'name' => 'Root Administrator',
            'email' => 'admin@electricitymeter.com',
            'password' => Hash::make('password'),
        ]);
        $rootAdmin->assignRole('root admin');

        $editor = User::create([
            'name' => 'Editor User',
            'email' => 'editor@electricitymeter.com',
            'password' => Hash::make('password'),
        ]);
        $editor->assignRole('Editor');

        $viewer = User::create([
            'name' => 'Viewer User',
            'email' => 'viewer@electricitymeter.com',
            'password' => Hash::make('password'),
        ]);
        $viewer->assignRole('Viewer');
    }
}