<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class uploadberita extends Model
{
    use HasFactory;
    protected $table = "berita";
    protected $primaryKey = "id_berita";//increment yang ada di sql
    public $timestamps = false;
    protected $fillable = [
        'judul',
        'isi',
        'foto',
        'tanggal',
    ];
}