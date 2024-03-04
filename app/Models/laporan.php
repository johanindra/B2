<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class laporan extends Model
{
    use HasFactory;


    protected $table = "laporan";

    public static function getDataStatusMasuk()
    {
        return count(self::where('status', 'Masuk')
        ->whereDate('tanggal', now()->toDateString())
        ->get());
        
    }

    public static function getDataSuratSelesaiBulanIni()
{
    

    $totalLaporanBulanIni = laporan::where('status', 'Selesai')
    ->whereDate('tanggal', now()->toDateString())
    ->count();
    return $totalLaporanBulanIni;
}

}
