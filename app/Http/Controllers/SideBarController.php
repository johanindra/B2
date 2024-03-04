<?php

namespace App\Http\Controllers;
use App\Models\dashboard;
use App\Models\laporan;
use App\Models\pengajuansurat;
use App\Models\surat;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SideBarController extends Controller
{
    public function dashboard()
    {
        $suratmasuk = laporan::getDataStatusMasuk();
        $chart = surat::getDataPengajuanSurat();
        $selesaibulanini = laporan::getDataSuratSelesaiBulanIni();
        $tabel = pengajuansurat::getDataMingguIni();

        $chart->transform(function ($item) {
            $item->tanggal = Carbon::parse($item->tanggal)->format('Y-m-d H:i:s');
            return $item;
        });
         

        // dd($tabel);

        return view('Admin.dashboard', [
            'dataMasuk' => $suratmasuk,
            'data' => $chart,
            'selesaibulanini' => $selesaibulanini,
            'tabel' => $tabel
        ]);
        
    }
    public function pengajuan()
    {
        return view('Admin.pengajuan');//untuk menampilkan halaman pengajuan
    }
    public function pembuatan()
    {
        return view('Admin.pembuatan-surat');//untuk menampilkan halaman pengajuan
    }
    public function laporan()
    {
        return view('Admin.laporan');//untuk menampilkan halaman pengajuan
    }
    public function profilDesa()
    {
        return view('Admin.profil-desa');//untuk menampilkan halaman pengajuan
    }
    public function kabarDesa()
    {
        return view('Admin.kabar-desa');//untuk menampilkan halaman pengajuan
    }
    public function keluar()
    {
        return view('welcome');//untuk keluar dan menampilkan landing page
    }

    public function side(){
        return view('Admin.includes.sidebar');
    }
}
