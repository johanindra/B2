<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class surat extends Model
{
    use HasFactory;
    protected $table = "surat";

    public static function getDataPengajuanSurat()
    {
        $data = self::leftJoin('pengajuan_surat', function ($join) {
            $join->on('surat.kode_surat', '=', 'pengajuan_surat.kode_surat')
                ->whereBetween('pengajuan_surat.tanggal', [now()->subWeek(), now()->endOfDay()]);
        })
        ->select(DB::raw('COALESCE(COUNT(pengajuan_surat.id), 0) AS total'), 'surat.kode_surat', 'pengajuan_surat.tanggal')
        ->groupBy('surat.kode_surat', 'pengajuan_surat.tanggal')
        ->orderBy('pengajuan_surat.tanggal','desc')
        ->get();

        DB::disconnect();
        // dd($data);
        
        return $data;
    
    }
}
