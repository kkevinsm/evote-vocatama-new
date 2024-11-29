<?php

namespace Database\Seeders;

use App\Models\Canditate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CanditateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Canditate::truncate();
        $canditates = [
            [
                'name' => 'IshlahYt',
                'role' => 'ipm',
                'visi' => 'visi haha',
                'misi' => 'misi hehe',
                'image' => 'photo',
            ],
            [
                'name' => 'Kevin',
                'role' => 'hw',
                'visi' => 'visi haha',
                'misi' => 'misi hehe',
                'image' => 'photo',
            ],
            [
                'name' => 'Mikhael',
                'role' => 'ts',
                'visi' => 'visi haha',
                'misi' => 'misi hehe',
                'image' => 'photo',
            ],
        ];

        foreach ($canditates as $canditate) {
            Canditate::create([
                'name' => $canditate['name'],
                'role' => $canditate['role'],
                'visi' => $canditate['visi'],
                'misi' => $canditate['misi'],
                'image' => $canditate['image'],
            ]);
        }
    }
}
