<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\skck;
use App\Models\sktm;
use App\Models\surat_ijin;
use App\Models\surat_mati;
use App\Models\surat_penghasilan;
use App\Models\ttd;
use App\Models\laporan;

class CekSuratController extends Controller {
    public static function cek( Request $request ) {
        $no_pengajuan = $request->input( 'no_pengajuan' );

        $kode_surat = $request->input( 'kode_surat' );

        switch ( $kode_surat ) {
            case 'skck':
            $detail_surat = skck::where( 'no_pengajuan', $no_pengajuan )->first();
            break;
            case 'sktm':
            $detail_surat = sktm::where( 'no_pengajuan', $no_pengajuan )->first();
            break;
            case 'surat_ijin':
            $detail_surat = surat_ijin::where( 'no_pengajuan', $no_pengajuan )->first();
            break;
            case 'surat_kematian':
            $detail_surat = surat_kematian::where( 'no_pengajuan', $no_pengajuan )->first();
            break;
            case 'surat_penghasilan':
            $detail_surat = surat_penghasilan::where( 'no_pengajuan', $no_pengajuan )->first();
            break;
            // Tambahkan case lain jika ada jenis surat lainnya
            default:
            $detail_surat = null;
            break;
        }

        $laporan = laporan::getlaporan($no_pengajuan, $kode_surat);

        $ttd = ttd::find( $request->input( 'mengetahui' ) );

        switch ( $kode_surat ) {
            case 'skck':
            return redirect()->route( 'skck' )->with( compact( 'detail_surat', 'ttd', 'laporan' ) );
            break;
            case 'surat_ijin':
            return redirect()->route( 'surat-ijin' )->with( compact( 'detail_surat', 'ttd', 'laporan' ) );
            break;
            case 'surat_mati':
            return redirect()->route( 'surat-mati' )->with( compact( 'detail_surat', 'ttd', 'laporan' ) );
            break;
            case 'surat_penghasilan':
            return redirect()->route( 'surat-penghasilan' )->with( compact( 'detail_surat', 'ttd', 'laporan' ) );
            break;
            case 'sktm':
            return redirect()->route( 'sktm' )->with( compact( 'detail_surat', 'ttd', 'laporan' ) );
            break;
            default:
            return redirect()->abort(404);
            break;
        }
    }

}
