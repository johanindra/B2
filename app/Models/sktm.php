<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sktm extends Model
{
    use HasFactory;
    protected $table = 'sktm';
    public $timestamps = false;

    protected $fillable = [
        'username',
        'nama_bapak',
        'tempat_tanggal_lahir_bapak',
        'pekerjaan_bapak',
        'alamat_bapak',
        'nama_ibu',
        'tempat_tanggal_lahir_ibu',
        'pekerjaan_ibu',
        'alamat_ibu',
        'nama_anak',
        'tempat_tanggal_lahir_anak',
        'jenis_kelamin_anak',
        'alamat_anak',
    ];
    
}
