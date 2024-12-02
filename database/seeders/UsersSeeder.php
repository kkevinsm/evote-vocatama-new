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
        User::truncate(); 
        $users = [ 
            [ 
                'name' => 'Admin',
                'username' => 'admin',
                'password' => 'password',
                'role_id' => '1',
                'status' => '1',
            ],
            // [
            //     'name' => 'User',
            //     'username' => 'user',
            //     'password' => 'password',
            //     'role_id' => '2',
            //     'status' => '1',
            // ],
        ];

        foreach($users as $user)
        {
            User::create([
                'name' => $user['name'],
                'role_id' => $user['role_id'],
                'username' => $user['username'],
                'password' => $user['password'],
                'status' => $user['status'],
            ]);
        }
    }
}
