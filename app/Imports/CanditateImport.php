<?php

namespace App\Imports;

use App\Models\Canditate;
use Maatwebsite\Excel\Concerns\ToModel;

class CanditateImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Canditate([
            'name' => $row[0],
            'role' => $row[1],
            'visi' => $row[2],
            'misi' => $row[3],
            'image' => 'avatar-4.png',
        ]);
    }
}
