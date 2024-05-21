<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ttd;
use App\Models\visimisi;
use App\Models\KabarDesa;
use App\Models\SuratMasuk;

class LandingPageController extends Controller {
    public function index() {
        // Section pertama: Nama Kepala Desa
        $kepalaDesa = Ttd::where( 'id', 'kepaladesa' )->first();

        // Section pertama: Visi dan Misi Desa
        $visi = visimisi::where( 'id', 'visi' )->first();
        $misi = visimisi::where( 'id', 'misi' )->first();

        // Section kedua: Jumlah Surat Masuk
        $suratSkck = SuratMasuk::where( 'kode_surat', 'skck' )->count();
        $suratSktm = SuratMasuk::where( 'kode_surat', 'sktm' )->count();
        $suratIzin = SuratMasuk::where( 'kode_surat', 'surat_ijin' )->count();
        $suratKematian = SuratMasuk::where( 'kode_surat', 'surat_kematian' )->count();
        $suratPenghasilan = SuratMasuk::where( 'kode_surat', 'surat_penghasilan' )->count();

        // Section ketiga: Agenda Desa
        $agendaDesa = KabarDesa::orderBy( 'created', 'desc' )->get();

        // Section keempat: Struktur Pemerintahan Desa
        $strukturDesa = ttd::limit(8)->get();

        return view( 'home', compact( 'kepalaDesa', 'visi', 'misi', 'suratSkck', 'suratSktm', 'suratIzin', 'suratKematian', 'suratPenghasilan', 'agendaDesa', 'strukturDesa' ) );
    }

    public function show( $id_berita ) {
        // Mengambil detail agenda berdasarkan ID
        $agenda = KabarDesa::findOrFail( $id_berita );

        return view( 'agenda_detail', compact( 'agenda' ) );
    }
}
