<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\skck;
use App\Models\sktm;
use App\Models\surat_ijin;
use App\Models\surat_mati;
use App\Models\surat_penghasilan;
use App\Models\ttd;  

class SuratController extends Controller
{
    public static function cek(Request $request){
        $no_pengajuan = $request->input('no_pengajuan');

       $kode_surat = $request->input('kode_surat');

       // Mengambil data surat berdasarkan kode surat dan no_pengajuan
       switch ($kode_surat) {
           case 'skck':
               $detail_surat = skck::where('no_pengajuan', $no_pengajuan)->first();
               break;
           case 'sktm':
               $detail_surat = sktm::where('no_pengajuan', $no_pengajuan)->first();
               break;
           case 'surat_ijin':
               $detail_surat = surat_ijin::where('no_pengajuan', $no_pengajuan)->first();
               break;
           case 'surat_kematian':
               $detail_surat = surat_kematian::where('no_pengajuan', $no_pengajuan)->first();
               break;
           case 'surat_penghasilan':
               $detail_surat = surat_penghasilan::where('no_pengajuan', $no_pengajuan)->first();
               break;
           // Tambahkan case lain jika ada jenis surat lainnya
           default:
               $detail_surat = null;
               break;
       }

       $ttd = ttd::find($request->input('mengetahui'));


       if($kode_surat == 'sktm'){
       return view('surat.sktm',compact('detail_surat'),
       [
        'ttd' => $ttd,
       ]);
       }
    }
}
