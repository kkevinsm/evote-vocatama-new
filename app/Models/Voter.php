<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'instansi',
        'asal',
        'role_id',
        'username',
        'pass',
        'status',
    ];
}
