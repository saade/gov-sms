<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::insert([
            'name' => 'Saade',
            'email' => 'saade@laravel.local',
            'password' => '$2y$12$q/Yp5Fy8M3Q1szAI01eeXODh1Igub/fHnQuLKjJt3mMwkyKRU6hbW', // 123123123
            'remember_token' => 'M5NjftUsUFM6eg4xNAnihEvETQAgkjco17Oa1imbYXR159i8WnWDg4IirtAp',
        ]);
    }
}
