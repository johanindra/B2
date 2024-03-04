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
        $tabelpengajuan = pengajuansurat::getPengajuanSurat();

        return view('Admin.pengajuan',[
            'tabel'=> $tabelpengajuan
        ]);//untuk menampilkan halaman pengajuan
    }
    public function pembuatan()
    {
        return view('Admin.pembuatan-surat');//untuk menampilkan halaman pengajuan
    }
    public function laporan()
    {
        $tabellaporan = laporan::getDataTabel();
        return view('Admin.laporan',[
            'tabel' => $tabellaporan
        ]);//untuk menampilkan halaman pengajuan
    }
    public function profilDesa()
    {
        return view('Admin.profil-desa');//untuk menampilkan halaman pengajuan
    }
    public function kabarDesa()
    {
        return view('Admin.kabar-desa');//untuk menampilkan halaman pengajuan
    }
    public function detailpengajuansurat(Request $request)
    {
        $id = $request->input('id');
        return $id;
    }

    public function side(){
        return view('Admin.includes.sidebar');
    }


}
