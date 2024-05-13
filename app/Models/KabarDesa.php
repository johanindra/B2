<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KabarDesa extends Model
{
    use HasFactory;

    protected $table = 'berita'; // Nama tabel
    protected $primaryKey = 'id_berita'; // Primary key yang benar
    public $incrementing = true; // Jika primary key auto-increment
    protected $keyType = 'int'; // Tipe data dari primary key

    public static function getData()
    {
        $data = self::all();

        return $data;
    }

    public static function getDataPerTahun(){
        return self::whereYear('tanggal', now()->year)->get()->count();
    }

}
