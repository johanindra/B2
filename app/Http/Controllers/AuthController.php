<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
{
    $credentials = $request->only('loginUsername', 'loginPassword');
    $user = User::where('username', $credentials['loginUsername'])->first();

    if ($user && Hash::check($credentials['loginPassword'], $user->password)) {
        Auth::login($user);
        return redirect()->route('dashboard');
    } else {
        return redirect()->route('login')->with('error', 'Username atau Password anda salah');
    }
}

    public function logout()
    {
        Auth::logout();
        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        return redirect('/login');
    }

    



}
