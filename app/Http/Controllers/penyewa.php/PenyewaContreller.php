<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    // halaman list artikel
   public function index()
{
    $artikels = \App\Models\Artikel::latest()->get();
    return view('artikel.index', compact('artikels'));
}

public function show($id)
{
    $artikel = \App\Models\Artikel::findOrFail($id);
    return view('artikel.show', compact('artikel'));
}
}