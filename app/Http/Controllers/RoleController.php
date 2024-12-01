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
        return $request;
        Role::where('id', $id)->update([
            'name' => $request->name,
            'max_vote' => $request->max_vote,
        ]);

        return redirect()->back()->with('status', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        Role::where('id', $id)->delete();

        return redirect()->back()->with('status', 'Data berhasil dihapus');
    }
}
