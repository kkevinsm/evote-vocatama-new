<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('session.register');
    }

    public function store()
{
    $attributes = request()->validate([
        'name' => ['required', 'max:50'],
        'email' => ['required', 'email', 'max:50', Rule::unique('users', 'email')],
        'password' => ['required', 'min:5', 'max:20'],
        'agreement' => ['accepted']
    ]);
    $attributes['password'] = bcrypt($attributes['password']);
    
    // Menetapkan role_id sebagai 2 untuk guest
    $attributes['role_id'] = 2;  // Guest
    
    session()->flash('success', 'Your account has been created.');
    $user = User::create($attributes);
    
    Auth::login($user);
    
    // Redirect berdasarkan role_id
    if ($user->role_id == 1) {
        return redirect('/dashboard'); // Admin
    } else {
        return redirect()->route('guest.index'); // Guest
    }
}

}
