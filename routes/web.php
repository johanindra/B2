<?php

use App\Http\Controllers\sideBarController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('dashboard', function () {
    return view('Admin.login.dashboard');
});

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('login', [HomeController::class, 'login'])->name('login');

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', [SideBarController::class, 'dashboard'])->name('dashboard');
Route::get('pengajuan', [SideBarController::class, 'pengajuan'])->name('Admin.pengajuan');
Route::get('pembuatan-surat', [SideBarController::class, 'pembuatan'])->name('Admin.pembuatan-surat');
Route::get('laporan', [SideBarController::class, 'laporan'])->name('Admin.laporan');
Route::get('profil-desa', [SideBarController::class, 'profilDesa'])->name('Admin.profil-desa');
Route::get('kabar-desa', [SideBarController::class, 'kabarDesa'])->name('Admin.kabar-desa');
Route::get('/home', [SideBarController::class, 'keluar'])->name('home');
Route::get('/detail-pengajuan', [SideBarController::class, 'detailpengajuan'])->name('detailpengajuan');
Route::get('/detail-laporan', [SideBarController::class, 'detaillaporan'])->name('detaillaporan');
