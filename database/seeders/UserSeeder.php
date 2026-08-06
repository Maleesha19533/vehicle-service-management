<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('12345678'),
            ]
        );

        $advisor = User::firstOrCreate(
            ['email' => 'advisor@gmail.com'],
            [
                'name' => 'Service Advisor',
                'password' => Hash::make('12345678'),
            ]
        );

        $mechanic = User::firstOrCreate(
            ['email' => 'mechanic@gmail.com'],
            [
                'name' => 'Mechanic',
                'password' => Hash::make('12345678'),
            ]
        );

        $admin->assignRole('Admin');
        $advisor->assignRole('Service Advisor');
        $mechanic->assignRole('Mechanic');
    }
}