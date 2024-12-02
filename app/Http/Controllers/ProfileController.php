<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function  index()
    {
        $data = User::where('id', 1)->first();

        // return $data;
        return view('admin.profile.index', compact([
            'data'
        ])); 
    }
}
