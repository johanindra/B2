<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visimisi extends Model
{
    use HasFactory;
    protected $table = 'visi_misi';
    protected $keyType = 'string';
    public $timestamps = false; 

    protected $fillable = [
        'id',
        'isi',
    ];

    public static function getdata(){
        return self::all();
    } 
}
