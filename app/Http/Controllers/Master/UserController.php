<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        // ❌ kalau belum login
        if (!session()->has('user_id')) {
            return redirect()->route('login.user')->with('error', 'Silakan login dulu');
        }

        // ❌ kalau role tidak sesuai
        if (session('role') != $role) {
            abort(403, 'AKSES DITOLAK (BUKAN ADMIN)');
        }

        return $next($request);
    }
}