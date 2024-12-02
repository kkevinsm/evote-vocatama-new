<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index (){
        $user = User::where('id', 1)->first();
        return view ('layouts.app', compact([
            'user'
        ]));
    }
}
