<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;

    protected $table = 'surat_masuk'; // Nama tabel jika berbeda dari default
    protected $primaryKey = 'id'; // Primary key
    public $incrementing = true; // Jika ID adalah auto-increment
    protected $keyType = 'int'; // Tipe data dari primary key
    public $timestamps = true; // Apakah menggunakan timestamps (created_at, updated_at)

    protected $fillable = ['kode_surat', 'tanggal'];
}
