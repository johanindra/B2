<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SideBarController extends Controller
{
    public function dashboard()
    {
        return view('Admin.dashboard'); //untuk menampilkan halaman dashboard
    }
    public function pengajuan()
    {
        return view('Admin.pengajuan'); //untuk menampilkan halaman pengajuan
    }
    public function pembuatan()
    {
        return view('Admin.pembuatan-surat'); //untuk menampilkan halaman pengajuan
    }
    public function laporan()
    {
        return view('Admin.laporan'); //untuk menampilkan halaman pengajuan
    }
    public function profilDesa()
    {
        return view('Admin.profil-desa'); //untuk menampilkan halaman pengajuan
    }
    public function kabarDesa()
    {
        return view('Admin.kabar-desa'); //untuk menampilkan halaman pengajuan
    }
    public function keluar()
    {
        return view('welcome'); //untuk keluar dan menampilkan landing page
    }
    public function detailpengajuan()
    {
        return view('Admin.detail-pengajuan');
    }
    public function detaillaporan()
    {
        return view('Admin.detail-laporan');
    }
    public function detailkabardesa()
    {
        return view('Admin.detail-kabar');
    }
}
