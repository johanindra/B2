<?php

namespace App\Http\Controllers;

use App\Models\dashboard;
use App\Models\laporan;
use App\Models\pengajuansurat;
use App\Models\surat;
use App\Models\ttd;
use App\Models\kabarDesa;
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
         

        // dd($selesaibulanini);

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
        return view('Admin.pembuatan-surat'); //untuk menampilkan halaman pengajuan
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
        $nama = ttd::getNama();

        // dd($nama);

        return view('Admin.profil-desa', [
            'nama'=> $nama
        ]);//untuk menampilkan halaman pengajuan
    }
    public function kabarDesa()
    { $kabardesa = kabarDesa::getdata();
        return view('Admin.kabar-desa',[
            'kabar_desa' => $kabardesa,
        ]); //untuk menampilkan halaman pengajuan
    }
    public function keluar()
    {
        return view('welcome'); //untuk keluar dan menampilkan landing page
    }
    public function detailpengajuan(Request $request)
    {
        $id = $request->input('id');
        return view('Admin.detail-pengajuan',
        ['id' => $id,
        ]);
        // return $id;
    }
    public function detaillaporan(Request $request)
    {
        $id = $request->input('id');
        return view('Admin.detail-laporan',
         ['id' => $id,
            ]);
    }
    public function detailkabardesa()
    {
        return view('Admin.detail-kabar');
    }
}
