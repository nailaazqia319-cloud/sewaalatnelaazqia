<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PenyewaAuthController
{
    public function showLoginForm()
    {
        return view('auth.loginpenyewa');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = DB::table('penyewas')
            ->where('username', $request->username)
            ->first();

        if (!$user) {
            return back()->with('error', 'Username tidak ditemukan');
        }

        if (!Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Password salah');
        }

        session([
            'penyewa_id' => $user->id,
            'nama' => $user->nama,
        ]);

        return redirect()->route('dashboard.penyewa');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('login.penyewa');
    }
}