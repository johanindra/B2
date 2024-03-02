<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticateUser
{
    public function handle($request, Closure $next)
    {
        // Cek apakah pengguna sudah login
        if (Auth::check()) {
            return redirect('/login')->with('error', 'Silakan login untuk mengakses halaman ini.');
        }
        return $next($request);
    }
}
