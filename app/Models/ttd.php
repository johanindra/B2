<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ttd extends Model
{
    use HasFactory;

    protected $table = 'ttd';
    protected $fillable = ['id', 'pangkat', 'nama', 'foto_profil'];
    public $timestamps = false;
    protected $keyType = 'string';

    public static function getNama(){
    return self::all();
    }

    // public function getData(){
    //     // Ambil semua data dari tabel 'ttd'
    //     $data = self::all();
    
    //     // Periksa apakah ada data
    //     if($data->isEmpty()) {
    //         return []; // Kembalikan array kosong jika tidak ada data
    //     }
    
    //     // Inisialisasi array untuk menyimpan data yang diformat
    //     $formattedData = [];
    
    //     // Ubah struktur data sesuai kebutuhan
    //     foreach ($data as $item) {
    //         // Tetapkan id sebagai string
    //         $item->setAttribute('id', (string)$item->id);
    
    //         // Pastikan item memiliki properti yang diperlukan
    //         if(isset($item->pangkat, $item->nama)) {
    //             $formattedData[$item->id] = [
    //                 'pangkat' => $item->pangkat,
    //                 'nama' => $item->nama,
    //                 // Jika diperlukan, tambahkan data lainnya ke dalam array
    //             ];
    //         }
    //     }
    
    //     return $formattedData;
    // }
    
   
    
}
