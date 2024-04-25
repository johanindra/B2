<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detail_surat;
use App\Models\ttd;

class PembuatanSurat extends Controller {
    public static function insert( Request $request ) {
        $kode_surat = $request->input( 'jenisSurat' );
        return $kode_surat;
    }

    public static function preview( Request $request ) {
        $data = $request->except( '_token' );

        $detail_surat = new detail_surat();
        foreach ( $data as $key => $value ) {
            $detail_surat->$key = $value;
        }
        // dd( $data );
        $kode_surat = $request->input( 'jenisSurat' );
        $ttd = ttd::find( $request->input( 'mengetahui' ) );
        // dd( $ttd );
        switch ( $kode_surat ) {
            case 'skck':
            return redirect()->route( 'skck' )->with( compact( 'detail_surat', 'ttd' ) );
            break;
            case 'surat_ijin':
            return view( 'surat.surat-ijin' )->with( compact( 'detail_surat', 'ttd' ) );
            break;
            case 'surat_kematian':
            return view( 'surat.surat-mati' )->with( compact( 'detail_surat', 'ttd' ) );
            break;
            case 'surat_penghasilan':
            return view( 'surat.surat-penghasilan' )->with( compact( 'detail_surat', 'ttd' ) );
            break;
            case 'sktm':
            return view( 'surat.sktm' )->with( compact( 'detail_surat', 'ttd' ) );
            break;
            default:
            return redirect()->abort( 404 );
            break;
        }
    }
}
