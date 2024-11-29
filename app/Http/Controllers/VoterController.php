<?php

namespace App\Http\Controllers;

use App\Imports\VoterImport;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class VoterController extends Controller
{
    public function index()
    {
        $datas = User::where('role_id', 2)->get();

        // return response()->json($datas);
        return view('admin.voter.index', compact([
            'datas',
        ]));
    }

    public function create(Request $request)
    {
        function generateRandomString($length = 8) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[random_int(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        $username = generateRandomString(4);
        $password = generateRandomString(4);

        // return $password;
        User::create([
            'name' => $request->name,
            'role_id' => 2,
            'username' => $username,
            'password' => $password,
            'status' => 1,
        ]);

        return redirect()->back()->with('status', 'Data berhasil ditambahkan');
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();

        return redirect()->back()->with('status', 'Data berhasil dihapus');
    }
    
    public function detail($id)
    {
        $data = User::where('id', $id)->first();

        return view('admin.voter.detail', compact(
            'data'
        ));
    }

    public function export()
    {
        $datas = User::where('id', 2)->get();
        $pdf = pdf::loadview('pdf', compact('datas'))->setPaper('a4', 'landscape');

        return $pdf->download();
    }

    public function view()
    {
        $datas = User::where('id', 2)->get();

        return view('pdf', compact(['datas']));
    }

    public function import(Request $request)
    {
        $data = User::where('id', 2)->get();
        Excel::import(new VoterImport,request()->file('file'));

        return redirect()->back()->with('status', 'Data berhasil diimport!');
    }

    public function active()
    {
        return 'Akan diaktifkan';
    }

    public function nonActive()
    {
        return 'Akan di non-aktifkan';
    }
}
