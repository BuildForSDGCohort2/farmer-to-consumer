<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            ['name' => 'Good Farmer', 'email' => 'farmer@farmer-to-consumer.test', 'password' => 'password'],
            ['name' => 'Good Consumer', 'email' => 'consumer@farmer-to-consumer.test', 'password' => 'password']
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
