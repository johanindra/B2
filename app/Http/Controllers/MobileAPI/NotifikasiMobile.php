<?php

namespace App\Http\Controllers\MobileApi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pengajuansurat;

class NotifikasiMobile extends Controller
{
    public function getNotifikasi( Request $request ) {
        if ( $request->method() === 'GET' ) {
            if ( $request->has( 'username' ) ) {
                $username = $request->input( 'username' );

                $laporan = pengajuansurat::getDataMobile($username);

                if ( $laporan->isNotEmpty() ) {
                    return response()->json( $laporan );
                } else {
                    return response()->json( [ 'message' => '0 results' ], 404 );
                }
            } else {
                return response()->json( [ 'message' => 'Username not provided' ], 400 );
            }
        }
    }
}
