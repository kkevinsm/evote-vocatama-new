<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LayoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('layouts')->insert([
            'id' => 1,
            'username' => 'admin',
            'password' => Hash::make('password'),
            'layout_name' => 'Admin',
            'photo' => 'photo.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
