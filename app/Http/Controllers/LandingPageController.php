<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ttd;
use App\Models\VisiMisi;
use App\Models\KabarDesa;
use App\Models\SuratMasuk;

class LandingPageController extends Controller
{
    public function index()
    {
        // Section pertama: Nama Kepala Desa
        $kepalaDesa = Ttd::where('id', 'kepaladesa')->first();

        // Section pertama: Visi dan Misi Desa
        $visi = VisiMisi::where('id', 'visi')->first();
        $misi = VisiMisi::where('id', 'misi')->first();

        // Section kedua: Jumlah Surat Masuk
        $suratSkck = SuratMasuk::where('kode_surat', 'skck')->count();
        $suratSktm = SuratMasuk::where('kode_surat', 'sktm')->count();
        $suratIzin = SuratMasuk::where('kode_surat', 'surat_ijin')->count();
        $suratKematian = SuratMasuk::where('kode_surat', 'surat_kematian')->count();
        $suratPenghasilan = SuratMasuk::where('kode_surat', 'surat_penghasilan')->count();

        // Section ketiga: Agenda Desa
        $agendaDesa = KabarDesa::orderBy('created', 'desc')->get();

        // Section keempat: Struktur Pemerintahan Desa
        $strukturDesa = Ttd::all(); // Atau pilih dengan kriteria tertentu

        return view('home', compact('kepalaDesa', 'visi', 'misi', 'suratSkck', 'suratSktm', 'suratIzin', 'suratKematian', 'suratPenghasilan', 'agendaDesa', 'strukturDesa'));
    }

    public function show($id_berita)
    {
        // Mengambil detail agenda berdasarkan ID
        $agenda = KabarDesa::findOrFail($id_berita);

        return view('agenda_detail', compact('agenda'));
    }
}
