<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Pilihan;
use App\Models\Formatur;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Imports\PemilihsImport;
use App\Models\Candidate;
use App\Models\Log;
use App\Models\Pemilih;
use App\Models\Role;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return "index";
    }

    public function dashboard()
    {
        $datas = Role::all();
        $logs = Log::all();
        $candidates = Candidate::all();
        $voters = User::where('role_id', 2)->get();
        $voted = User::where('status', 2)->get();
        $unvoted = User::where('status', 1)->get();


        // return $logs;
        return view('dashboard', compact([
            'datas',
            'logs',
            'candidates',
            'voters',
            'voted',
            'unvoted'
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function pemilih()
    {
        return view('admin.pemilih');
    }

    public function import()
    {
        $data = Pemilih::all();
        Excel::store(new PemilihsImport($data), 'output.pdf', 'public', null, [
            'excel' => [
                'pdf' => [
                    'paper_size' => 'A4',
                ],
            ],
        ]);

        // Excel::import(new PemilihsImport,request()->file('file'));

        return redirect()->back();
    }
}
