<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index() {
        $datas  = Role::all();

        return view('admin.role.index', compact([
            'datas'
        ]));
    }

    public function create(Request $request)
    {
        Role::create([
            'name' => $request->name,
            'max_vote' => $request->max_vote,
        ]);

        return redirect()->route('role.index')->with('status', 'Data berhasil ditambahkan!');
    }

    public function update(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'id' => 'required|exists:roles,id',
            'name' => 'required|string|max:255',
            'max_vote' => 'required|integer|min:0',
        ]);
    
        Role::where('id', $validated['id'])->update([
            'name' => $validated['name'],
            'max_vote' => $validated['max_vote'],
        ]);
    
        return redirect()->back()->with('status', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        Role::where('id', $id)->delete();

        return redirect()->back()->with('status', 'Data berhasil dihapus');
    }
}
