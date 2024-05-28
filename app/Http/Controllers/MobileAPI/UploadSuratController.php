<?php

namespace App\Http\Controllers\MobileAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadSuratController extends Controller {
    
    public function upload( Request $request ) {
        $file = $request->file( 'file' );
        $filename = $file->getClientOriginalName();
        $path = public_path( 'foto_kelengkapan/' . $filename );
        $file->move( public_path( 'foto_kelengkapan' ), $filename );

        if ( File::exists( $path ) ) {
            return response()->json( [
                'status' => 'success',
                'message' => 'File uploaded successfully',
                'filename' => $filename,
                'filepath' => $path
            ] );
        } else {
            return response()->json( [
                'status' => 'error',
                'message' => 'Failed to upload file'
            ], 500 );
        }
    }

}
