<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Pastikan hanya admin yang dapat mengakses
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        // Jika bukan admin, alihkan ke halaman lain (misalnya dashboard pengguna)
        return redirect('/create')->with('error', 'You do not have permission to access this page.');
    }
}
