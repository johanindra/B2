<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KabarDesa extends Model
{
    use HasFactory;

    protected $table = "berita";
    protected $primarykey = "id_berita";

    public static function getData()
    {
        // Mengambil data dari tabel "berita"
        $data = self::all();

        return $data;
    }

}
