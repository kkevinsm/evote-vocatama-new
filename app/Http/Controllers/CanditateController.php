<?php

namespace App\Http\Controllers;

use App\Imports\CanditateImport;
use App\Models\Canditate;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CanditateController extends Controller
{
    public function index()
    {
        $datas = Canditate::all();

        return view('admin.canditate.index', compact([
            'datas',
        ]));
    }

    public function create(Request $request)
    {
        // return $request->asal;
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        if ($image = $request->file('foto')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            // $input['image'] = "$profileImage";
        }
    
        Canditate::create([
            'nama' => $request->nama,
            'role' => $request->role,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'image' => $profileImage,
        ]);

        return redirect()->route('canditate.index')->with('status', 'Data berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        Canditate::where('id', $id)->update([
            'nama' => $request->nama,
            'asal' => $request->asal,
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);

        return redirect()->back()->with('status', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        Canditate::where('id', $id)->delete();

        return $id;

        return redirect()->back()->with('status', 'Data berhasil dihapus');
    }

    public function detail($id)
    {
        $data = Canditate::where('id', $id)->first();

        return view('admin.canditate.detail', compact(
            'data'
        ));
    }

    public function import(Request $request)
    {
        Excel::import(new CanditateImport,request()->file('file'));

        return redirect()->back()->with('status', 'Data berhasil diimport!');
    }
}
