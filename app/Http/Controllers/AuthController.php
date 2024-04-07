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

    public function gantipassword(Request $request)
{
    // Mendapatkan pengguna yang sedang login
    $user = Auth::User();

    // Memeriksa apakah password lama yang dimasukkan sesuai dengan password yang tersimpan di basis data
    if (Hash::check($request->passwordsekarang, $user->password)) {
        // Password lama sesuai, mengubah password baru
        $user->password = Hash::make($request->konfirmasipassword);
        $user->save();

        return redirect()->back()->with('ubahpassword', 'Password berhasil diperbarui!')->with('activeTab', 'profile-change-password');
    } else {
        // Password lama tidak sesuai, tampilkan pesan kesalahan
        return redirect()->back()->with('ubahpassword', 'Password lama yang dimasukkan salah.')->with('activeTab', 'profile-change-password');
    }
}



}
