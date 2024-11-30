<?php

namespace App\Http\Controllers;

use App\Imports\CandidateImport;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CandidateController extends Controller
{
    public function index()
    {
        $datas = Candidate::all();

        return view('admin.candidate.index', compact([
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
    
        Candidate::create([
            'nama' => $request->nama,
            'role' => $request->role,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'image' => $profileImage,
        ]);

        return redirect()->route('candidate.index')->with('status', 'Data berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        Candidate::where('id', $id)->update([
            'nama' => $request->nama,
            'asal' => $request->asal,
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);

        return redirect()->back()->with('status', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        Candidate::where('id', $id)->delete();

        return $id;

        return redirect()->back()->with('status', 'Data berhasil dihapus');
    }

    public function detail($id)
    {
        $data = Candidate::where('id', $id)->first();

        return view('admin.candidate.detail', compact(
            'data'
        ));
    }

    public function import(Request $request)
    {
        Excel::import(new CandidateImport,request()->file('file'));

        return redirect()->back()->with('status', 'Data berhasil diimport!');
    }
}
