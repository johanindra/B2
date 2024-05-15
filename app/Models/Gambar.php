<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Gambar extends Model
{
    protected $table = "kabar_desa";
 
    protected $fillable = ['file','keterangan'];

    public static function get(){
        
    }
}