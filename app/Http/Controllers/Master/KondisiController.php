<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KondisiController extends Controller
{
    public function index()
    {
        $data = DB::table('kondisis')->get();
        return view('user.kondisi.index', compact('data'));
    }

    public function create()
    {
        return view('user.kondisi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required'
        ]);

        DB::table('kondisis')->insert([
            'nama' => $request->nama,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('kondisi.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = DB::table('kondisis')->where('id', $id)->first();
        return view('user.kondisi.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required'
        ]);

        DB::table('kondisis')->where('id', $id)->update([
            'nama' => $request->nama,
            'updated_at' => now()
        ]);

        return redirect()->route('kondisi.index')->with('success', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        DB::table('kondisis')->where('id', $id)->delete();
        return redirect()->route('kondisi.index')->with('success', 'Data berhasil dihapus');
    }
}