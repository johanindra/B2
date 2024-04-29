<?php
// app/Http/Controllers/VisiMisiController.php
namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index()
    {
        $visi = VisiMisi::where('id', 'visi')->first();
        $misi = VisiMisi::where('id', 'misi')->first();

        return view('services', compact('visi', 'misi'));
    }
}
