<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Log;
use App\Models\Pilihan;
use App\Models\Role;
use App\Models\User;

class GuestController extends Controller
{
    public function index()
{
    $datas = Candidate::all();
    $roles = Role::all();
    $groupedDatas = [];

    foreach ($roles as $role) {
        $groupedDatas[$role['name']] = [];
    }

    foreach ($datas as $data) {
        $groupedDatas[$data['role']][] = $data;
    }

    // Ambil data admin
    $adminData = User::where('id', 1)->first();

    return view('guest.index', compact([
        'datas',
        'roles',
        'groupedDatas',
        'adminData' // Kirim data admin ke view
    ]));
}


    public function store(Request $request)
    {
        $count = count(Role::all());
        $array = $request->selectedValues[$count];

        if (is_string($array)) {
            $array = json_decode($array, true); 
        }

        if (is_array($array)) {
            foreach ($array as $value) {
                Log::create([
                    'user_id' => Auth::user()->id,
                    'candidate_id' => $value,
                ]);

                User::where('id', Auth::user()->id)->update([
                    'status' => 2,
                ]);
            }

            return redirect()->route('terimakasih')->with('status', 'Terimakasih telah memilih!');
        }

        return redirect()->back()->withErrors(['error' => 'Data tidak valid!']);
    }


    public function ipm()
    {
        $datas = Candidate::where('role', 'ipm')->get();
        return view('guest.ipm', compact([
            'datas'
        ]));
    }

    public function hw()
    {
        $datas = Candidate::where('role', 'hw')->get();
        return view('guest.hw', compact([
            'datas'
        ]));
    }

    public function ts()
    {
        $datas = Candidate::where('role', 'ts')->get();
        return view('guest.ts', compact([
            'datas'
        ]));
    }

    public function pilihipm(Request $request)
    {
        foreach ($request->category as $value){
            Log::create([
                'user_id' => Auth::user()->id,
                'candidate_id' => $value,
            ]);
        }        

        return redirect()->route('guest.hw')->with('status', 'Terimakasih telah memilih!');
    }

    public function pilihhw(Request $request)
    {
        foreach ($request->category as $value){
            Log::create([
                'user_id' => Auth::user()->id,
                'candidate_id' => $value,
            ]);
        }

        return redirect()->route('guest.ts')->with('status', 'Terimakasih telah memilih!');
    }

    public function pilihts(Request $request)
    {
        foreach ($request->category as $value){
            Log::create([
                'user_id' => Auth::user()->id,
                'candidate_id' => $value,
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

