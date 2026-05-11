<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MerkController extends Controller
{
    public function index()
    {
        $data = DB::table('merks')->get();
        return view('user.merk.index', compact('data'));
    }

    public function create()
    {
        return view('user.merk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required'
        ]);

        DB::table('merks')->insert([
            'nama' => $request->nama,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('merk.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = DB::table('merks')->where('id', $id)->first();
        return view('user.merk.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required'
        ]);

        DB::table('merks')->where('id', $id)->update([
            'nama' => $request->nama,
            'updated_at' => now()
        ]);

        return redirect()->route('merk.index')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        DB::table('merks')->where('id', $id)->delete();
        return redirect()->route('merk.index')->with('success', 'Data berhasil dihapus');
    }
}