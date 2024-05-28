<?php

namespace App\Http\Controllers\MobileAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfilController extends Controller {

    public function upload(Request $request) {
        $maxFileSize = 5 * 1024 * 1024; 
    
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $fileSize = $file->getSize();
    
        if ($fileSize > $maxFileSize) {
            return response()->json([
                'status' => 'error',
                'message' => 'File size is too large. Maximum file size is 5 MB.'
            ], 400);
        }
    
        $tujuan ='foto_profil';
        $path = public_path('foto_profil/' . $filename);
        $file->move($ujuan, $filename);
    
        if (File::exists($path)) {
            return response()->json([
                'status' => 'success',
                'message' => 'File uploaded successfully',
                'filename' => $filename,
                'filepath' => $path
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to upload file'
            ], 500);
        }
    }

}
