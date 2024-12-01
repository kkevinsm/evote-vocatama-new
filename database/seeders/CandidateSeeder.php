<?php

namespace Database\Seeders;

use App\Models\Candidate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Candidate::truncate();
        $candidates = [
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

        foreach ($candidates as $candidate) {
            Candidate::create([
                'name' => $candidate['name'],
                'role' => $candidate['role'],
                'visi' => $candidate['visi'],
                'misi' => $candidate['misi'],
                'image' => $candidate['image'],
            ]);
        }
    }
}
