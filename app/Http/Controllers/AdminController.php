<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('split-bill.admin-table', compact('users'));
    }

    public function editUser()
    {
        // Logika untuk halaman admin-edit-user
        return view('split-bill.admin-edit-user');
    }
}

