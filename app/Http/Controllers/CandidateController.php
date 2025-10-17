<?php

namespace App\Http\Controllers;

use App\Imports\CandidateImport;
use App\Models\Candidate;
use App\Models\Role;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\DataTables;

class CandidateController extends Controller
{
    public function index(Request $request)
    {
        $datas = Candidate::all();
        $roles = Role::all();

        if ($request->ajax()) {
            return Datatables::of($datas)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.candidate.index', compact('datas', 'roles'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'visi' => 'required|string',
            'misi' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $profileImage = null;
        if ($image = $request->file('photo')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
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
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'visi' => 'required|string',
            'misi' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $candidate = Candidate::findOrFail($id);

        $profileImage = $candidate->image; // default gambar lama
        if ($image = $request->file('photo')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
        }

        $candidate->update([
            'name' => $request->name,
            'role' => $request->role,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'image' => $profileImage,
        ]);

        return redirect()->back()->with('status', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Candidate::destroy($id);

        return redirect()->back()->with('status', 'Data berhasil dihapus!');
    }

    public function detail($id)
    {
        $candidate = Candidate::findOrFail($id);
        $roles = Role::all();

        return view('admin.candidate.detail', compact('candidate', 'roles'));
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,xls,csv',
        ]);

        Excel::import(new CandidateImport, $request->file('file'));

        return redirect()->back()->with('status', 'Data berhasil diimport!');
    }
}
