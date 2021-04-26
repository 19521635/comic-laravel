<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Create UserType
        \App\Models\UserType::insert([
            'name' => 'Admin'
        ]);
        \App\Models\UserType::insert([
            'name' => 'Mod'
        ]);
        \App\Models\UserType::insert([
            'name' => 'Member'
        ]);

        // Create Admin User
        \App\Models\User::firstOrCreate([
            'display_name' => 'Admin',
            'username' => 'admin',
            'email' => env('ADMIN_EMAIL', 'admin@gmail.com'),
            'password' => Hash::make(env('ADMIN_PASSWORD', '12345678')),
            'user_type_id' => 1
        ]);

    }
}
