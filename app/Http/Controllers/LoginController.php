<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('split-bill.login');
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            if (strtolower(Auth::user()->role) === 'admin') {
                return redirect('admin-dashboard');
            }
            else {
                return redirect('create');
            }
        }
        else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }
}
