<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;


    protected $table = "laporan";

    public static function getDataStatusMasuk()
    {
        return self::where('status', 'masuk')
        ->whereDate('tanggal', now()->toDateString())
        ->get();
    }

    public static function getDataSuratSelesaiBulanIni()
{
    return self::where('status', 'selesai')
               ->whereMonth('tanggal', now()->month)
               ->get();
}

}
