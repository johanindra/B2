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
        $data = self::all();

        return $data;
    }

    public static function getDataPerTahun(){
        return self::whereYear('tanggal', now()->year)->get()->count();
    }

}
