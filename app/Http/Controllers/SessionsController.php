<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SessionsController extends Controller
{
    public function create()
    {
        return view('session.login-session');
    }

    public function store()
    {
        $attributes = request()->validate([
            'username'=>'required',
            'password'=>'required' 
        ]);

        $user = \App\Models\User::where('username', $attributes['username'])->first();
        if ($user && $user->password === $attributes['password']) {
            Auth::login($user);
            session()->regenerate();
            
            if ($user->role_id == 1) {
                return redirect('dashboard')->with(['success' => 'You are logged in.']);
            } else {
                return redirect()->route('guest.index')->with(['success' => 'You are logged in.']);
            }
        } else {
            return back()->withErrors(['danger' => 'Username or password invalid.']);
        }
    }
    
    public function destroy()
    {

        Auth::logout();

        return redirect('/login')->with(['success'=>'You\'ve been logged out.']);
    }
}
