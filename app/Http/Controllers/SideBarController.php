<?php

namespace App\Http\Controllers;

use App\Models\dashboard;
use App\Models\laporan;
use App\Models\pengajuansurat;
use App\Models\surat;
use App\Models\ttd;
use App\Models\kabarDesa;
use App\Models\skck;
use App\Models\sktm;
use App\Models\surat_ijin;
use App\Models\surat_mati;
use App\Models\surat_penghasilan;
use App\Models\visimisi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

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
        $visimisi = visimisi::getdata();
        // dd($nama);
        return view('Admin.profil-desa', [
            'nama'=> $nama,
            'visimisi' => $visimisi
        ]);//untuk menampilkan halaman pengajuan
    }
    public function kabarDesa(){
         $kabardesa = kabarDesa::getdata();
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
    // Ambil ID pengajuan dan kode surat dari data tersembunyi dalam formulir
    $id_pengajuan = $request->input('id');
    $kode_surat = $request->input('kode_surat');

    // Temukan pengajuan berdasarkan ID
    $pengajuan = pengajuansurat::find($id_pengajuan);

    if ($pengajuan) {
        // Ambil no_pengajuan setelah menemukan pengajuan
        $no_pengajuan = $pengajuan->no_pengajuan;

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
                $detail_surat = surat_mati::where('no_pengajuan', $no_pengajuan)->first();
                break;
            case 'surat_penghasilan':
                $detail_surat = surat_penghasilan::where('no_pengajuan', $no_pengajuan)->first();
                break;
            // Tambahkan case lain jika ada jenis surat lainnya
            default:
                $detail_surat = null;
                break;
        }

        if ($detail_surat) {
            // Jika ditemukan, arahkan ke halaman detail surat dengan data surat yang ditemukan
            return view('Admin.detail-pengajuan', compact('detail_surat'));
        } else {
            // Jika tidak ditemukan, arahkan kembali ke halaman sebelumnya atau berikan respons yang sesuai
            return back()->with('error', 'Detail surat not found');
        }
    } else {
        // Jika pengajuan tidak ditemukan, arahkan kembali ke halaman sebelumnya atau berikan respons yang sesuai
        return back()->with('error', 'Pengajuan not found');
    }
}

    public function detaillaporan(Request $request)
    {
        // Ambil ID pengajuan dan kode surat dari data tersembunyi dalam formulir
    $id_pengajuan = $request->input('id');
    $kode_surat = $request->input('kode_surat');

    // Temukan pengajuan berdasarkan ID
    $pengajuan = pengajuansurat::find($id_pengajuan);

    if ($pengajuan) {
        // Ambil no_pengajuan setelah menemukan pengajuan
        $no_pengajuan = $pengajuan->no_pengajuan;

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

        if ($detail_surat) {
            // Jika ditemukan, arahkan ke halaman detail surat dengan data surat yang ditemukan
            return view('Admin.detail-laporan', compact('detail_surat'));
        } else {
            // Jika tidak ditemukan, arahkan kembali ke halaman sebelumnya atau berikan respons yang sesuai
            return back()->with('error', 'Detail surat not found');
        }
    } else {
        // Jika pengajuan tidak ditemukan, arahkan kembali ke halaman sebelumnya atau berikan respons yang sesuai
        return back()->with('error', 'Pengajuan not found');
    }
    }
    public function detailkabardesa()
    {
        return view('Admin.detail-kabar');
    }
}
