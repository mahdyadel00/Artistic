<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'name'              => 'Admin',
            'email'             => 'admin@email.com',
            'password'          => Hash::make('password'),
            'email_verified_at' => now(),
        ]);
    }
}
