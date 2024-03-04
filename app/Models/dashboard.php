<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class dashboard extends Model
{
    use HasFactory;
    protected $table = "pengajuan_surat";
     protected $primaryKey = "id";
     public $incrementing = false; //increment yang ada di sql
     public $timestamps = false ; 
    protected $fillable = [
        'username',
        'password',
    ];

   

   

    
}
