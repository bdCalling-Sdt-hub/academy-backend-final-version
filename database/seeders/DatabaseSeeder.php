<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Supe admin 100',
             'email' => 'superadmin100@gmail.com',
             'password' => bcrypt('1234567rr'),
             'otp' => 0,
             'email_verified_at' => now(),
             'role' => 'SUPER ADMIN',
         ]);
    }
}
