<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoredashboardRequest;
use App\Http\Requests\UpdatedashboardRequest;
use App\Models\dashboard;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
    /**
     * Display the specified resource.
     */
    public function show()
    {
        
        $data = dashboard::getDataPengajuanSurat();

        
        return view('dashboard', ['data' => $data]);
    
    }

    public function getChartData()
    {
        // Lakukan query SQL di sini untuk mendapatkan data
        $data = DB::select("SELECT COUNT(pengajuan_surat.id) AS total, surat.kode_surat, pengajuan_surat.tanggal 
            FROM pengajuan_surat 
            JOIN surat ON surat.kode_surat = pengajuan_surat.kode_surat 
            WHERE pengajuan_surat.tanggal BETWEEN CURDATE() - INTERVAL 1 WEEK AND CURDATE()
            GROUP BY surat.kode_surat, pengajuan_surat.tanggal");

        return response()->json($data);
    }
}
