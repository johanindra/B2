<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Hash;

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

        if ($user && $user->password === md5($credentials['loginPassword'])) {
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

    public function gantipassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);
       
        $user = Auth::User();
        // dd($user->currentPasswordMD5);
        $currentPasswordMD5 = md5($request->current_password);

       

        if ($currentPasswordMD5 !== $user->password) {
            return back()->with('error', 'Current password is incorrect.');
        }
        // Encrypt new password with MD5 before saving
        $newPasswordMD5 = md5($request->password);

        $user->password = $newPasswordMD5;
        $user->save();

        return redirect()->route('profil-desa')->with('success', 'Password changed successfully.');
    }




}
