<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function admin()
    {
        // CEK LOGIN
        if (!session('user_id')) {
            return redirect()->route('login.user');
        }

        // CEK ROLE
        if (session('role') != 'admin') {
            abort(403);
        }

        return view('user.dashboard.dashboardadmin');
    }

    public function petugas()
    {
        if (!session('user_id')) {
            return redirect()->route('login.user');
        }

        if (session('role') != 'petugas') {
            abort(403);
        }

        return view('user.dashboard.dashboardpetugas');
    }
}