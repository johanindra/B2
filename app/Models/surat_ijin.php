<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surat_ijin extends Model
{
    use HasFactory;
    protected $table = 'surat_ijin';
    public $timestamps = false;

    protected $fillable = [
        'username',
        'Nama',
        'NIK',
        'Jenis_kelamin',
        'Tempat_tanggal_lahir',
        'Kewarganegaraan',
        'Agama',
        'Pekerjaan',
        'Alamat',
        'Tempat_Kerja',
        'Bagian',
        'Tanggal',
        'Alasan',
    ];
    
}
