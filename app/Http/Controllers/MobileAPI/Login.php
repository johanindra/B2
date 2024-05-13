<?php

namespace App\Http\Controllers\MobileAPI;

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

}

