<?php

use App\Http\Controllers\SideBarController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadKabarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\CekSuratController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\PembuatanSurat;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\TeamController;


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

Route::get('login', [HomeController::class, 'login'])->name('login');
Route::get('/', [LandingPageController::class, 'index'])->name('home');
Route::get('/agenda-detail/{id_berita}', [LandingPageController::class, 'show'])->name('agenda.show');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('dashboard', [SideBarController::class, 'dashboard'])->name('dashboard');
Route::get('pengajuan', [SideBarController::class, 'pengajuan'])->name('pengajuan');
Route::get('pembuatan-surat', [SideBarController::class, 'pembuatan'])->name('pembuatan-surat');
Route::get('laporan', [SideBarController::class, 'laporan'])->name('laporan');
Route::get('profil-desa', [SideBarController::class, 'profilDesa'])->name('profil-desa');
Route::get('kabar-desa', [SideBarController::class, 'kabarDesa'])->name('kabar-desa');
Route::get('/home', [SideBarController::class, 'keluar'])->name('home');
Route::post('detail-pengajuan', [SideBarController::class, 'detailpengajuan'])->name('detailpengajuan');
Route::post('/detail-laporan', [SideBarController::class, 'detaillaporan'])->name('detaillaporan');
Route::any('/detail-kabar', [SideBarController::class, 'detailkabardesa'])->name('detailkabardesa');


// upload kabar desa
// Route::get('/kabar-desa', [UploadKabarController::class, 'upload'])->name('upload');
Route::post('/upload/proses', [UploadKabarController::class, 'proses_upload'])->name('uploadKabar');

Route::get('/upload/hapus/{id}', [UploadKabarController::class, 'hapus'])->name('upload.hapus');
Route::get('/detail-kabar/{id}', [SideBarController::class, 'detailkabardesa'])->name('detail.kabar');



// backend
Route::middleware(['auth.admin'])->group(function () {
    Route::get('dashboard', [SideBarController::class, 'dashboard'])->name('dashboard');
    Route::get('pengajuan', [SideBarController::class, 'pengajuan'])->name('pengajuan');
    Route::get('pembuatan-surat', [SideBarController::class, 'pembuatan'])->name('pembuatan-surat');
    Route::get('laporan', [SideBarController::class, 'laporan'])->name('laporan');
    Route::get('profil-desa', [SideBarController::class, 'profilDesa'])->name('profil-desa');
    Route::get('kabar-desa', [SideBarController::class, 'kabarDesa'])->name('kabar-desa');
});

Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

//porfil-desa
route::post('ubahpassword', [AuthController::class, 'gantipassword'])->name('ubahpassword');
route::post('updateperangkat',[ProfilDesaController::class, 'update'])->name('updateperangkat');
Route::post('visi-misi', [ProfilDesaController::class, 'visimisi'])->name('visimisi');


Route::post('cek-surat', [CekSuratController::class, 'cek'])->name('ceksurat');

Route::get('/skck', [SuratController::class, 'skck'])->name('skck');
Route::get('/surat-ijin', [SuratController::class, 'suratIjin'])->name('surat-ijin');
Route::get('/surat-mati', [SuratController::class, 'suratMati'])->name('surat-mati');
Route::get('/surat-penghasilan', [SuratController::class, 'suratPenghasilan'])->name('surat-penghasilan');
Route::get('/sktm', [SuratController::class, 'sktm'])->name('sktm');



//pembuatan surat
route::post('/pembuatan-surat/insert',[PembuatanSurat::class, 'insert'])->name('insertsurat');
route::post('/pembuatan-surat/preview',[PembuatanSurat::class, 'preview'])->name('previewsurat');
