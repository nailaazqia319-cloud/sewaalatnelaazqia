<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserAuthController
{
    public function loginForm()
    {
        return view('auth.loginuser');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // ✅ FIX: tabel user (tanpa s)
        $user = DB::table('user')
            ->where('username', $request->username)
            ->first();

        if (!$user) {
            return back()->with('error', 'Username tidak ditemukan');
        }

        if (!Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Password salah');
        }

        session([
            'user_id' => $user->id,
            'nama'    => $user->nama,
            'role'    => $user->role,
        ]);

        if ($user->role == 'admin') {
            return redirect()->route('dashboard.admin');
        } else {
            return redirect()->route('dashboard.petugas');
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('login.user');
    }
}