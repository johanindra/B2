<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akun_user extends Model
{
    use HasFactory;
    protected $table = "akun_user";
    protected $primaryKey = "username";
    public $incrementing = false; //increment yang ada di sql
    public $timestamps = false ;
    protected $fillable = [
        'username',
        'password',
        'email',
        'nama',
        'no_hp',
        'foto_profil',
    ];

    public static function login($username, $password){
       return self::where('username', $username)
                ->where('password', $password)
                ->first();
    }
    public static function logingoogle($email){
       return self::where('email', $email)
                ->first();
    }
}
