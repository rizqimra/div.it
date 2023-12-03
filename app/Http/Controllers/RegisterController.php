<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('split-bill.signup');
    }

    public function actionRegister(Request $request)
    {
        // Create a new user
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        // Redirect to login with a success message
        return redirect('login')->with('success', 'Registration successful!');
        
        // If registration fails, redirect back to the registration form with an error message
        return redirect()->back()->with('error', 'Registration failed. Please try again.');
    }
}
