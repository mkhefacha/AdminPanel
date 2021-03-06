<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Superadmin',
                'email'          => 'superadmin@admin.com',
                'active'         =>1,
                'password'       => '$2y$10$2BLwY8QnM5GOQDrzTncCz.OOlMoJFWIAX.6YUcbAMyxOH06ZS.1AG',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
