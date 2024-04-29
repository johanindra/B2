<?php
// app/Http/Controllers/StrukturPemerintahanController.php
namespace App\Http\Controllers;

use App\Models\Ttd;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel 'ttd'
        $struktur = Ttd::all();

        // Return view dengan data yang diambil
        return view('team', compact('struktur'));
    }
}
