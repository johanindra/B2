<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembuatanSurat extends Controller {
    public static function insert( Request $request ) {
        $kode_surat = $request->input( 'jenisSurat' );
        return $kode_surat;
    }

    public static function preview( Request $request ) {
        // Mengambil semua input formulir kecuali token CSRF
        $requestData = $request->except( [ '_token' ] );

        // Merename kunci-kunci input menjadi 'detail_surat'
        $detail_surat = [];
        foreach ( $requestData as $key => $value ) {
            $renamedKey =  $key;
            // Menambahkan prefiks 'detail_surat_'
            $detail_surat[ $renamedKey ] = $value;
        }

        // Mendapatkan nilai 'jenisSurat' untuk switch case
        $kode_surat = $request->input( 'jenisSurat' );

        // Melakukan redirect berdasarkan jenisSurat
        switch ( $kode_surat ) {
            case 'skck':
            return redirect()->route( 'skck' )->with( $detail_surat );
            break;
            case 'surat_ijin':
            return redirect()->route( 'surat-ijin' )->with( $detail_surat );
            break;
            case 'surat_mati':
                dd($detail_surat);
            return redirect()->route( 'surat-mati' )->with( $detail_surat );
            break;
            case 'surat_penghasilan':
            return redirect()->route( 'surat-penghasilan' )->with( $detail_surat );
            break;
            case 'sktm':
            return redirect()->route( 'sktm' )->with( $detail_surat );
            break;
            default:
            return redirect()->abort( 404 );
            break;
        }
    }

}
