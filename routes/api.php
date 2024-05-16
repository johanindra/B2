<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CekSuratController;
use App\Http\Controllers\MobileApi\Login;
use App\Http\Controllers\MobileApi\NotifikasiMobile;




//tolak pengajuan surat web
Route::post('tolak',[CekSuratController::class, 'tolak'])->name('tolaksurat');
Route::post('tolak-detail',[CekSuratController::class, 'tolakdetail'])->name('tolaksuratdetail');

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return 'awokaowkaokawokoakokaokwkaowk';
});

Route::get('/loginmobile', function(){
return 'yowes ndang login';
});

Route::prefix('/MobileAPI')->group(function () {
    //login, register, lupa password
   Route::post('login', [Login::class, 'login'])->name('login');
   Route::post('register', [Login::class, 'register'])->name('register');
   Route::post('kirimkodeotp', [Login::class, 'kirimkodeotp'])->name('kirimkodeotp');
   Route::post('cekkodeotp', [Login::class, 'cekkodeotp']);
   Route::post('ubahpassword', [Login::class, 'ubahpassword']);

   
   Route::get('get_notifikasi', [NotifikasiMobile::class, 'getNotifikasi']);
    
});
