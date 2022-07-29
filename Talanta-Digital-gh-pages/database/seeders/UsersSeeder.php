<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Joseph Otieno',
                'email' => 'otienojoe14@gmail.com',
                'password' => Hash::make('talantaadmin'),
                'user_type' => 'admin',
            ],
            [
                'name' => 'Dennis Kipchumba',
                'email' => 'kipchumbadennis10@gmail.com',
                'password' => Hash::make('Kipkip94.'),
                'user_type' => 'student',
            ]
        ];

        foreach ($user as $userinfo) {
            User::create([
                'name' => $userinfo['name'],
                'email' => $userinfo['email'],
                'password' => $userinfo['password'],
                'user_type' => $userinfo['user_type'],
            ]);
        }
    }
}
