<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class dashboard extends Model
{
    use HasFactory;
    protected $table = "pengajuan";
     protected $primaryKey = "id";
     public $incrementing = false; //increment yang ada di sql
     public $timestamps = false ; 
    protected $fillable = [
        'username',
        'password',
    ];

    public static function getDataPengajuanSurat()
    {
        $data = DB::table('surat')
        ->leftJoin('pengajuan_surat', function ($join) {
            $join->on('surat.kode_surat', '=', 'pengajuan_surat.kode_surat')
                ->whereBetween('pengajuan_surat.tanggal', [now()->subWeek(), now()->endOfDay()]);
        })
        ->select(DB::raw('COALESCE(COUNT(pengajuan_surat.id), 0) AS total'), 'surat.kode_surat', 'pengajuan_surat.tanggal')
        ->groupBy('surat.kode_surat', 'pengajuan_surat.tanggal')
        ->get();

        
        return $data;
    
    }
}
