<?php

namespace App\Http\Controllers\MobileAPI;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\akun_user;

class Login extends Controller {
    public function login( Request $request ) {
        try {
            $data = $request->json()->all();

            // dd( $data );
            if ( isset( $data[ 'username' ] ) && isset( $data[ 'password' ] ) ) {
                $username = $data[ 'username' ];
                $password = md5( $data[ 'password' ] );

                $user = akun_user::login( $username, $password );
                // dd( $user );

                if ( $user ) {
                    $response = [
                        'status' => 'success',
                        'message' => 'Login successful',
                        'username' => $user->username,
                        'email' => $user->email,
                        'nama' => $user->nama,
                        'foto_profil' => $user->foto_profil,
                        'kode_otp' => $user->kode_otp,
                        'created' => $user->created,
                    ];
                    // Tambahkan data pengguna lainnya ke $response jika diperlukan
                } else {
                    $response = [
                        'status' => 'errorValid',
                        'message' => 'Invalid username or password',
                    ];
                }
            } else {
                $response = [
                    'status' => 'error',
                    'message' => 'Invalid data format',
                ];
            }
        } catch ( Exception $e ) {
            $response = [
                'status' => 'error',
                'message' => 'Error: ' . $e->getMessage(),
            ];
        }

        return response()->json( $response );
    }

    public function register(Request $request){

        $data = $request->json()->all();

        // Mendapatkan nilai dari data
        $username = $data['username'];
        $password = md5($data['password']);
        $email = $data['email'];
        $nama = $data['nama'];
        $no_hp = $data['no_hp'];

        // Masukkan nilai ke dalam database
        $user = new akun_user();
        $user->username = $username;
        $user->password = $password;
        $user->email = $email;
        $user->nama = $nama;
        $user->no_hp = $no_hp;

        if ($user->save()) {
            $response = [
                'status' => 'success',
                'message' => 'User registered successfully'
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Failed to register user'
            ];
        }

        // Mengembalikan response ke Flutter
        return response()->json($response);

    }

    public function kirimkodeotp(Request $request){
        try {
            $data = $request->json()->all();
    
            // Mendapatkan nilai dari data
            $email = $data['email'];
    
            // Mencari pengguna berdasarkan email
            $user = akun_user::where('email', $email)->first();
            // dd($user);
    
            if ($user) {
                // Membuat kode OTP
                $kode = rand(100000, 999999);
                // dd($kode);
                
                // Menyimpan kode OTP ke dalam database
                $user->kode_otp = $kode;
                $user->save();
    
                // Mengirim email berisi kode OTP
                Mail::send('template-email.email-otp', ['kode' => $kode], function ($message) use ($user) {
                    $message->to($user->email);
                    $message->subject('Kode OTP Anda');
                });
    
                // Memberikan respons sukses
                $response = [
                    'status' => 'success',
                    'message' => 'Kode OTP telah dikirimkan ke email Anda.',
                ];
            } else {
                // Memberikan respons jika pengguna tidak ditemukan
                $response = [
                    'status' => 'error',
                    'message' => 'Pengguna dengan email tersebut tidak ditemukan.',
                ];
            }
        } catch (Exception $e) {
            // Memberikan respons jika terjadi kesalahan
            $response = [
                'status' => 'error',
                'message' => 'Error: ' . $e->getMessage(),
            ];
        }
    
        return response()->json($response);
    }

    public function cekkodeotp(Request $request){
        try {
            $data = $request->json()->all();
        
            // Mendapatkan nilai dari data
            $email = $data['email'];
            $kode_otp = $data['kode_otp'];
    
            // Mencari pengguna berdasarkan email
            $user = akun_user::where('email', $email)->first();
    
            if ($user) {
                // Memeriksa apakah kode OTP cocok
                if ($user->kode_otp == $kode_otp) {
                    // Kode OTP cocok
                    $response = [
                        'status' => 'success',
                        'message' => 'Kode OTP cocok.',
                    ];
                } else {
                    // Kode OTP tidak cocok
                    $response = [
                        'status' => 'error',
                        'message' => 'Kode OTP tidak cocok.',
                    ];
                }
            } else {
                // Pengguna tidak ditemukan
                $response = [
                    'status' => 'error',
                    'message' => 'Pengguna dengan email tersebut tidak ditemukan.',
                ];
            }
        } catch (Exception $e) {
            // Penanganan kesalahan
            $response = [
                'status' => 'error',
                'message' => 'error: ' . $e->getMessage(),
            ];
        }
    
        return response()->json($response);
    }
    
    public function ubahpassword(Request $request){
        try {
            $data = $request->json()->all();
        
            // Mendapatkan nilai dari data
            $email = $data['email'];
            $new_password = md5($data['new_password']);
    
            // Mencari pengguna berdasarkan email
            $user = akun_user::where('email', $email)->first();
    
            if ($user) {
                // Memperbarui kata sandi pengguna
                $user->password = $new_password;
                $user->save();
    
                $response = [
                    'status' => 'success',
                    'message' => 'Kata sandi berhasil diperbarui.',
                ];
            } else {
                // Pengguna tidak ditemukan
                $response = [
                    'status' => 'error',
                    'message' => 'Pengguna dengan email tersebut tidak ditemukan.',
                ];
            }
        } catch (Exception $e) {
            // Penanganan kesalahan
            $response = [
                'status' => 'error',
                'message' => 'Error: ' . $e->getMessage(),
            ];
        }
    
        return response()->json($response);
    }
    
    public function logingoogle( Request $request ) {
        try {
            $data = $request->json()->all();
            // dd( $data );
            
            if ( $data['email'] !== null ) {
                $email = $data[ 'email' ];

                $user = akun_user::logingoogle( $email );
                // dd( $user );

                if ( $user ) {
                    $response = [
                        'status' => 'success',
                        'message' => 'Login successful',
                        'username' => $user->username,
                        'email' => $user->email,
                        'nama' => $user->nama,
                        'foto_profil' => $user->foto_profil,
                        'kode_otp' => $user->kode_otp,
                        'created' => $user->created,
                    ];
                    // Tambahkan data pengguna lainnya ke $response jika diperlukan
                } else {
                    $response = [
                        'status' => 'errorValid',
                        'message' => 'Invalid username or password',
                    ];
                }
            } else {
                $response = [
                    'status' => 'error',
                    'message' => 'Invalid data format',
                ];
            }
        } catch ( Exception $e ) {
            $response = [
                'status' => 'error',
                'message' => 'Error: ' . $e->getMessage(),
            ];
        }

        return response()->json( $response );
    }
    

}

