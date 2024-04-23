<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembuatanSurat extends Controller
{
    public static function insert(Request $request){
        $kode_surat = $request->input('jenisSurat');
        return $kode_surat;
    }

    public static function preview(Request $request){
    $kode_surat = $request->input('jenisSurat');
    return $kode_surat;
    }
}
