<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

       $user = User::create([
            'name' => 'Ilham Maulana',
            'email' => 'ilham@admin.com',
            'password' => Hash::make('password'),
            'image' => 'image.png'
        ]);

        $user->assignRole('Admin');

        $this->call([
            companySeeder::class
        ]); 
    }
}
