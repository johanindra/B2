<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ttd;
use App\Models\visimisi;
use Illuminate\Database\QueryException;

class ProfilDesaController extends Controller
{
    public function edit($id)
{
    // Temukan entitas Desa berdasarkan ID
    $desa = ttd::findOrFail($id);

    // Kirim nilai default ke formulir untuk diedit
    return view('edit-form', [
        'desa' => $desa
    ]);
}

public function update(Request $request)
{
    try {
        // Validasi data yang diterima dari formulir
        $validatedData = $request->validate([
            'nama.*' => 'required|string',
        ]);

        // Loop melalui array nama yang diterima dari formulir
        foreach ($request->input('nama') as $pangkat => $nama) {
            // Temukan entitas Desa berdasarkan pangkat
            
            $desa = ttd::where('id', $pangkat)->first();
// dd($desa);
            // Perbarui nama jika entitas ditemukan
            if ($desa) {
                $desa->nama = $nama;
                $desa->save();
            }
        }

        // Redirect ke halaman yang sesuai dengan kebutuhan aplikasi Anda
        return redirect()->route('profil-desa')->with('updateperangkatdesa', 'Data berhasil diperbarui.');
    } catch (QueryException $e) {
        // Tangani error MySQL
        return redirect()->back()->with('errorupdateperangkat', 'Terjadi kesalahan pada database: ' . $e->getMessage());
    } catch (\Exception $e) {
        // Tangani error
        return redirect()->back()->with('errorupdateperangkat', 'Terjadi kesalahan: ' . $e->getMessage());
    }
}

public function visimisi(Request $request){
// Validasi data yang diterima dari formulir
$validatedData = $request->validate([
    'visi' => 'required|string',
    'misi' => 'required|string',
]);

try {
    // Cek apakah sudah ada data visi
    $visi = visimisi::where('id', 'visi')->first();

    // Jika belum ada data visi, buat data baru
    if (!$visi) {
        visimisi::create([
            'id' => 'visi',
            'isi' => $request->input('visi'),
        ]);

        $message = 'Data visi berhasil ditambahkan.';
    } else {
        // Jika sudah ada, lakukan pembaruan
        $visi->update([
            'isi' => $request->input('visi'),
        ]);

        $message = 'Data visi berhasil diperbarui.';
    }

    // Cek apakah sudah ada data misi
    $misi = visimisi::where('id', 'misi')->first();

    // Jika belum ada data misi, buat data baru
    if (!$misi) {
        visimisi::create([
            'id' => 'misi',
            'isi' => $request->input('misi'),
        ]);

        $message .= ' Data misi berhasil ditambahkan.';
    } else {
        // Jika sudah ada, lakukan pembaruan
        $misi->update([
            'isi' => $request->input('misi'),
        ]);

        $message .= ' Data misi berhasil diperbarui.';
    }

    // Redirect ke halaman yang sesuai dengan kebutuhan aplikasi Anda
    return redirect()->route('profil-desa')->with('successvisimisi', $message);
} catch (\Exception $e) {
    // Tangani kesalahan SQL
    return redirect()->back()->with('errorvisimis', 'Terjadi kesalahan dalam database: ' . $e->getMessage());
}
}


    
}
