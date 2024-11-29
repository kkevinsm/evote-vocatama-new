<?php

namespace App\Http\Controllers;

use App\Models\Canditate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Formatur;
use App\Models\Log;
use App\Models\Pilihan;
use App\Models\Pemilih;
use App\Models\User;

class GuestController extends Controller
{

    public function ipm()
    {
        $datas = Canditate::where('role', 'ipm')->get();
        return view('guest.ipm', compact([
            'datas'
        ]));
    }

    public function hw()
    {
        $datas = Canditate::where('role', 'hw')->get();
        return view('guest.hw', compact([
            'datas'
        ]));
    }

    public function ts()
    {
        $datas = Canditate::where('role', 'ts')->get();
        return view('guest.ts', compact([
            'datas'
        ]));
    }

    public function pilihipm(Request $request)
    {
        foreach ($request->category as $value){
            Log::create([
                'user_id' => Auth::user()->id,
                'canditate_id' => $value,
            ]);
        }        

        return redirect()->route('guest.hw')->with('status', 'Terimakasih telah memilih!');
    }

    public function pilihhw(Request $request)
    {
        foreach ($request->category as $value){
            Log::create([
                'user_id' => Auth::user()->id,
                'canditate_id' => $value,
            ]);
        }

        return redirect()->route('guest.ts')->with('status', 'Terimakasih telah memilih!');
    }

    public function pilihts(Request $request)
    {
        foreach ($request->category as $value){
            Log::create([
                'user_id' => Auth::user()->id,
                'canditate_id' => $value,
            ]);
        }

        User::where('id', Auth::user()->id)->update([
            'status' => 0,
        ]);

        return redirect()->route('terimakasih')->with('status', 'Terimakasih telah memilih!');
    }

    public function terimakasih()
    {
        return view('guest.terimakasih');
    }

    public function submit(Request $request)
    {
        foreach ($request->category as $value){
            Pilihan::create([
                'dari' => Auth::user()->id,
                'untuk' => $value,
            ]);
        }        

        User::where('id', Auth::user()->id)->update([
            'status' => 0,
        ]);

        return redirect()->route('terimakasih')->with('status', 'Terimakasih telah memilih!');
    }

    // public function logout()
    // {
    //     $user = Auth::user();

    //     return $user;
    //     $user->status = 0;

    //     User::where('id', $user->id)->update([
    //         'status' => 0,
    //     ]);

    //     return view('logout');
    // }
}

