<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skck extends Model
{
    use HasFactory;

    protected $table = 'skck';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'nik',
        'tempat_tgl_lahir',
        'kebangsaan',
        'agama',
        'jenis_kelamin',
        'status_perkawinan',
        'pekerjaan',
        'tempat_tinggal',
        'username',
    ];
    
}
