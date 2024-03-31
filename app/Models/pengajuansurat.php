<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuansurat extends Model
{
    use HasFactory;
    protected $table = "pengajuan_surat";

    public static function getDataMingguIni()
{
    return self::join('laporan', 'pengajuan_surat.id', '=', 'laporan.id')
    ->join('surat', 'surat.kode_surat', '=', 'pengajuan_surat.kode_surat')
    ->whereIn('laporan.status', ['Masuk', 'Selesai'])
    ->whereYear('pengajuan_surat.tanggal', '=', now()->year)
    ->whereRaw('WEEK(pengajuan_surat.tanggal) = WEEK(NOW())')
    ->groupBy('pengajuan_surat.id', 'pengajuan_surat.nama', 'surat.Keterangan', 'laporan.status', 'pengajuan_surat.tanggal')
    ->select('pengajuan_surat.nama', 'surat.Keterangan', 'pengajuan_surat.tanggal', 'laporan.status')
    ->get();

}

public static function getPengajuanSurat(){
    return self::join('surat', 'pengajuan_surat.kode_surat', '=', 'surat.kode_surat')
    ->join('laporan', 'pengajuan_surat.id', '=', 'laporan.id')
    ->where('laporan.status', 'Masuk')
    ->select('pengajuan_surat.nik', 'pengajuan_surat.nama', 'pengajuan_surat.tanggal', 'pengajuan_surat.id', 'surat.kode_surat')
    ->orderBy('pengajuan_surat.tanggal', 'desc') // Add this line to sort by tanggal in descending order
    ->get();

   
}

}
