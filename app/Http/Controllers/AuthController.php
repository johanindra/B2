<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller {
    public function showLoginForm() {
        return view( 'login' );
    }

    public function login( Request $request ) {
        $credentials = $request->only( 'loginUsername', 'loginPassword' );
        $user = User::where( 'username', $credentials[ 'loginUsername' ] )->first();

        if ( $user && Hash::check( $credentials[ 'loginPassword' ], $user->password ) ) {
            Auth::login( $user );
            return redirect()->route( 'dashboard' );
        } else {
            return redirect()->route( 'login' )->with( 'error', 'Username atau Password anda salah' );
        }
    }

    public function kode( Request $request ) {
        try {
            $credentials = $request-> only( 'username', 'password' );

            $user = User::where( 'username', $credentials[ 'username' ] )->first();
            if ($user) {
                $kode = rand(000000,999999);
                $user->kode_otp= $kode;
                $user->save();

                Mail::send('template-email.email-otp', ['kode' => $kode], function ($message) use ($user) {
                    $message->to($user->email);
                    $message->subject('Kode OTP Anda');
                });

                return redirect()->back()->with( 'success', 'silahkan cek kode otp' )->withInput($request->all());
            } else {
                return redirect()->back()->with( 'error', 'Username tidak ditemukan' )->withInput($request->all());
            }
        } catch(QueryException $e){
            
            return redirect()->back()->with( 'error', 'terjadi kesalahan pada sql error : '.$e )->withInput($request->all());
        }
    }

    public function logout() {
        Auth::logout();
        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        return redirect( '/login' );
    }

    public function lupakatasandi(Request $request){
        try {
            $username = $request->input('username');
            $kode_otp = (int) $request->input('kode_otp');
            $password = $request->input('password');
            $konfirmasi_password = $request->input('konfirmasi_password');

           
            // Check if username exists
            $user = User::where('username', $username)->first();
            // dd($kode_otp, $user->kode_otp);
            if (!$user) {
                throw new \Exception('Username tidak ditemukan');
            }

            // Check if OTP code is valid
            if ($user->kode_otp !== $kode_otp) {
                throw new \Exception('Kode OTP tidak valid');
            }

            // Check if password and confirmation password match
            if ($password!== $konfirmasi_password) {
                throw new \Exception('Password dan konfirmasi password tidak sama');
            }

            // Hash the password using bcrypt
            $hashed_password = Hash::make($password);

            // Update the user's password in the database
            User::where('username', $username)->update(['password' => $hashed_password]);

            return Redirect()->back()->with('success', 'Kata sandi berhasil diubah');
        } catch (\Exception $e) {
            return Redirect()->back()->with(['error' => $e->getMessage()])->withInput($request->all());
        } catch (\Illuminate\Database\QueryException $e) {
            return Redirect()->back()->with(['error' => 'Error updating database'])->withInput($request->all());
        }

    }

}
