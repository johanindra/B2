<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surat_penghasilan extends Model
{
    use HasFactory;
    
    protected $table = 'surat_penghasilan';
    public $timestamps = false;

    protected $fillable = [
        'username',
        'nama_lengkap',
        'nik',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'pekerjaan',
        'alamat',
        'jumlah_penghasilan',
        'kegunaan_surat',
    ];
    
}
