<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\View;

class InfoUserController extends Controller
{

    public function create()
    {
        return view('laravel-examples/user-profile');
    }

    public function store(Request $request)
    {
        // return $request;
        $attributes = request()->validate([
            'name' => ['required', 'max:50'],
        ]);

        $request->validate([
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        if ($image = $request->file('profile_image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            // $input['image'] = "$profileImage";
        }
        
        
        User::where('id',Auth::user()->id)
        ->update([
            'name'    => $attributes['name'],
            'photo' => $profileImage
        ]);


        return redirect()->route('profile.index')->with('success','Profile updated successfully');
    }
}
