<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlatController extends Controller
{
    public function index()
    {
        $data = DB::table('alats')
            ->join('merks', 'alats.merk_id', '=', 'merks.id')
            ->join('kategoris', 'alats.kategori_id', '=', 'kategoris.id')
            ->join('kondisis', 'alats.kondisi_id', '=', 'kondisis.id')
            ->select(
                'alats.*',
                'merks.nama as merk',
                'kategoris.nama as kategori',
                'kondisis.nama as kondisi'
            )
            ->get();

        return view('user.alat.index', compact('data'));
    }

    public function create()
    {
        $merk = DB::table('merks')->get();
        $kategori = DB::table('kategoris')->get();
        $kondisi = DB::table('kondisis')->get();

        return view('user.alat.create', compact('merk', 'kategori', 'kondisi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'merk_id' => 'required',
            'kategori_id' => 'required',
            'kondisi_id' => 'required',
            'stok' => 'required|numeric',
            'harga_sewa' => 'required|numeric'
        ]);

        DB::table('alats')->insert([
            'nama' => $request->nama,
            'merk_id' => $request->merk_id,
            'kategori_id' => $request->kategori_id,
            'kondisi_id' => $request->kondisi_id,
            'stok' => $request->stok,
            'harga_sewa' => $request->harga_sewa,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('alat.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function delete($id)
    {
        DB::table('alats')->where('id', $id)->delete();
        return redirect()->route('alat.index')->with('success', 'Data berhasil dihapus');
    }
}