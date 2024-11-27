<?php

namespace Database\Seeders;

use App\Models\Formatur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FormaturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Formatur::truncate(); 
        $formaturs = [ 
            [ 
                'nama' => 'IshlahYt',
                'asal' => 'ipm',
                'visi' => 'visi haha',
                'misi' => 'misi hehe',
                'image' => 'photo',
            ],
            [ 
                'nama' => 'Kevin',
                'asal' => 'hw',
                'visi' => 'visi haha',
                'misi' => 'misi hehe',
                'image' => 'photo',
            ],
            [ 
                'nama' => 'Mikhael',
                'asal' => 'ts',
                'visi' => 'visi haha',
                'misi' => 'misi hehe',
                'image' => 'photo',
            ],
        ];

        foreach($formaturs as $formatur)
        {
            Formatur::create([
                'nama' => $formatur['nama'],
                'asal' => $formatur['asal'],
                'visi' => $formatur['visi'],
                'misi' => $formatur['misi'],
                'image' => $formatur['image'],
            ]);
        }
    }
}
