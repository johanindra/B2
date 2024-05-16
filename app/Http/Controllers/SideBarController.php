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
use App\Models\uploadberita;
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

        $kabar_desa = uploadberita::get();

        $jumlahkabardesa = uploadberita::count();

        $chart->transform(function ($item) {
            $item->tanggal = Carbon::parse($item->tanggal)->format('Y-m-d H:i:s');
            return $item;
        });


        // dd($selesaibulanini);

        return view('Admin.dashboard', [
            'dataMasuk' => $suratmasuk,
            'data' => $chart,
            'selesaibulanini' => $selesaibulanini,
            'tabel' => $tabel,

            'jumlahkabardesa' => $jumlahkabardesa,
            'kabar_desa' => $kabar_desa

        ]);
    }
    public function pengajuan()
    {
        $tabelpengajuan = pengajuansurat::getPengajuanSurat();

        return view('Admin.pengajuan', [
            'tabel' => $tabelpengajuan
        ]); //untuk menampilkan halaman pengajuan
    }
    public function pembuatan()
    {
        return view('Admin.pembuatan-surat'); //untuk menampilkan halaman pengajuan
    }
    public function laporan(Request $request)
    {
        $months = [
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember'
        ];

        $current_year = date('Y');
        $current_month = date('m');

        $years = range($current_year, $current_year - 10);

        $bulan = $request->input('filter_month', $current_month);
        $tahun = $request->input('filter_year', date('Y'));

        // Store the selected month and year in the session
        session(['selected_month' => $bulan]);
        session(['selected_year' => $tahun]);

        $tabellaporan = Laporan::getDataTabel($bulan, $tahun);

        // Cek apakah ada data yang ditemukan
        if ($tabellaporan->isEmpty()) {
            // Buat pesan sesuai dengan bulan dan tahun yang dipilih
            $bulan_tahun = $months[$bulan] . ' ' . $tahun;
            $pesan = "Tidak ada laporan pada bulan {$bulan_tahun}";

            return view('Admin.laporan', [
                'pesan' => $pesan,
                'months' => $months,
                'years' => $years,
                'current_month' => $current_month
            ]);
        }

        // Jika ada data, tampilkan data normal
        return view('Admin.laporan', [
            'tabel' => $tabellaporan,
            'months' => $months,
            'years' => $years,
            'current_month' => $current_month
        ]);
    }

    public function profilDesa()
    {
        $nama = ttd::getNama();
        $visimisi = visimisi::getdata();
        // dd($nama);
        return view('Admin.profil-desa', [
            'nama' => $nama,
            'visimisi' => $visimisi
        ]); //untuk menampilkan halaman pengajuan
    }
    public function kabarDesa()
    {
        $kabardesa = kabarDesa::getdata();
        return view('Admin.kabar-desa', [
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
        // dd($pengajuan);

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
                    // dd($id_pengajuan);
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
                // Jika pengajuan tidak ditemukan, arahkan kembali ke halaman sebelumnya atau berikan respons yang sesuai
                return back()->with('error', 'Pengajuan not found');
            }
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
    public function detailkabardesa($id_berita)
    {
        $kabar_desa = uploadberita::find($id_berita);
        if (!$kabar_desa) {
            return redirect()->back()->with('error', 'Kabar desa tidak ditemukan.');
        }
        return view('Admin.detail-kabar', compact('kabar_desa'));
    }
}
