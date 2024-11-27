<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Pemilih;
use App\Models\User;
use App\Imports\PemilihsImport;
use App\Exports\PemilihsExport;
use Maatwebsite\Excel\Facades\Excel;
use Dompdf\Dompdf;
use PDF;


class PemilihController extends Controller
{
    public function index()
    {
        $datas = User::where('role_id', 2)->get();

        return view('admin.pemilih.index', compact([
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

        User::create([
            'name' => $request->nama,
            'asal' => $request->asal,
            'role_id' => 2,
            'username' => $username,
            'pass' => $password,
            'password' => Hash::make($password),
            'status' => 1,
        ]);

        Pemilih::create([
            'nama' => $request->nama,
            'asal' => $request->asal,
            'role_id' => 2,
            'username' => $username,
            'pass' => $password,
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
        $data = Pemilih::where('id', $id)->first();

        return view('admin.pemilih.detail', compact(
            'data'
        ));
    }

    public function export()
    {
        $datas = Pemilih::all();
        $pdf = PDF::loadview('pdf', compact('datas'))->setPaper('a4', 'landscape');

        return $pdf->download();
    }

    public function view()
    {
        $datas = Pemilih::all();

        return view('pdf', compact(['datas']));
    }

    public function import(Request $request)
    {
        $data = Pemilih::all();
        Excel::import(new PemilihsImport,request()->file('file'));

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
