<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ttd;
use App\Models\visimisi;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
                'gambar.*' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            // Loop melalui array nama yang diterima dari formulir
            foreach ($request->input('nama') as $pangkat => $nama) {
                // Temukan entitas Desa berdasarkan pangkat
                $desa = ttd::where('id', $pangkat)->first();

                // Periksa apakah file gambar tersedia
                if ($request->hasFile('gambar.' . $pangkat)) {
                    // menyimpan data file yang diupload ke variabel $foto_perangkat
                    $foto_perangkat = $request->file('gambar.' . $pangkat);

                    $perangkat_foto = time() . "_" . $foto_perangkat->getClientOriginalName();

                    // isi dengan nama folder tempat kemana file diupload
                    $tujuan_upload = 'data_foto_perangkat';
                    $foto_perangkat->move($tujuan_upload, $perangkat_foto);

                    // Simpan nama file foto di database

                } else {
                    $perangkat_foto = '';
                }

                // Perbarui nama jika entitas ditemukan
                if ($desa) {
                    $desa->nama = $nama;
                    $desa->foto_profil = $perangkat_foto;
                    $desa->save();
                }
            }

            // Redirect ke halaman yang sesuai dengan kebutuhan aplikasi Anda
            return redirect()->route('profil-desa')->with('success', 'Data berhasil diperbarui.');
        } catch (QueryException $e) {
            // Tangani error MySQL
            return redirect()->back()->with('error', 'Terjadi kesalahan pada database: ' . $e->getMessage());
        } catch (\Exception $e) {
            // Tangani error
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }


    public function visimisi(Request $request)
    {
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

                // $message = 'Data visi berhasil diperbarui.';
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

                // $message .= ' Data misi berhasil diperbarui.';
            }
            $message = 'Data visi misi berhasil diperbarui.';

            // Redirect ke halaman yang sesuai dengan kebutuhan aplikasi Anda
            return redirect()->route('profil-desa')->with('success', $message);
        } catch (\Exception $e) {
            // Tangani kesalahan SQL
            return redirect()->back()->with('error', 'Terjadi kesalahan dalam database: ' . $e->getMessage());
        }
    }

    public function gantipassword(Request $request)
    {
        $request->validate([
            'passwordsekarang' => 'required',
            'passwordbaru' => [
                'required',
                'regex:/^\S*$/u', // Tidak boleh mengandung spasi
            ],
        ], [
            'passwordbaru.regex' => 'Password baru tidak boleh mengandung spasi.',
        ]);
        // Mendapatkan pengguna yang sedang login
        $user = Auth::User();

        // Memeriksa apakah password lama yang dimasukkan sesuai dengan password yang tersimpan di basis data
        if (Hash::check($request->passwordsekarang, $user->password)) {
            // Password lama sesuai, mengubah password baru
            $user->password = Hash::make($request->konfirmasipassword);
            $user->save();

            return redirect()->back()->with('success', 'Password berhasil diperbarui');
        } else {
            // Password lama tidak sesuai, tampilkan pesan kesalahan
            return redirect()->back()->with('error', 'Password lama yang dimasukkan salah');
        }
    }
}
