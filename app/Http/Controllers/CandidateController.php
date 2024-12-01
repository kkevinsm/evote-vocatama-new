<?php

namespace App\Http\Controllers;

use App\Imports\CandidateImport;
use App\Models\Candidate;
use App\Models\Role;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CandidateController extends Controller
{
    public function index()
    {
        $datas = Candidate::all();
        $roles = Role::all();

        return view('admin.candidate.index', compact([
            'datas',
            'roles',
        ]));
    }

    public function create(Request $request)
    {
        // return $request;
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        if ($image = $request->file('photo')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            // $input['image'] = "$profileImage";
        }
    
        Candidate::create([
            'name' => $request->name,
            'role' => $request->role,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'image' => $profileImage,
        ]);

        return redirect()->route('candidate.index')->with('status', 'Data berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        try {
            //code...
            $request->validate([
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
      
            if ($image = $request->file('photo')) {
                $destinationPath = 'image/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                // $input['image'] = "$profileImage";
            }
            Candidate::where('id', $id)->update([
                'name' => $request->name,
                'role' => $request->role,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'image' => $profileImage,
            ]);
    
            return redirect()->back()->with('status', 'Data berhasil diperbarui');
        } catch (\Throwable $th) {
            //throw $th;
        }
        

        // return $request;
        Candidate::where('id', $id)->update([
            'name' => $request->name,
            'role' => $request->role,
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);
        return redirect()->back()->with('status', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        Candidate::where('id', $id)->delete();

        return redirect()->back()->with('status', 'Data berhasil dihapus');
    }

    public function detail($id)
    {
        $candidate = Candidate::where('id', $id)->first();
        $roles = Role::all();

        return view('admin.candidate.detail', compact(
            'candidate',
            'roles'
        ));
    }

    public function import(Request $request)
    {
        Excel::import(new CandidateImport,request()->file('file'));

        return redirect()->back()->with('status', 'Data berhasil diimport!');
    }
}
