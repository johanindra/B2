<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surat_mati extends Model
{
    use HasFactory;

    protected $table = 'surat_kematian';
    
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'alamat',
        'jenis_kelamin',
        'tanggal_kematian',
        'username',
    ];
}
