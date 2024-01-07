<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\motor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'role_id' => 1
        ]);

        \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => Hash::make('user'),
            'role_id' => 2
        ]);

        \App\Models\merkmotor::create([
            'nama' => 'Kawasaki'
        ]);

        \App\Models\merkmotor::create([
            'nama' => 'Honda'
        ]);

        \App\Models\merkmotor::create([
            'nama' => 'Yamaha'
        ]);

        \App\Models\jenismotor::create([
            'nama' => 'Sport'
        ]);

        \App\Models\jenismotor::create([
            'nama' => 'Matic'
        ]);

        \App\Models\jenismotor::create([
            'nama' => 'Bebek'
        ]);

    
    }
}
