<?php

namespace App\Http\Controllers;

use App\Gambar;
use App\Models\uploadberita;
use Illuminate\Http\Request;

class UploadKabarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function upload()
    {
        $kabar_desa = uploadberita::get();
        return view('Admin.kabar-desa', ['kabar_desa' => $kabar_desa]);
    }

    public function proses_upload(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'tanggal' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'isi' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $foto
        $foto = $request->file('foto');

        $nama_foto = time() . "_" . $foto->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_foto_berita';
        $foto->move($tujuan_upload, $nama_foto);

        uploadberita::create([

            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'foto' => $nama_foto,
            'isi' => $request->isi,
        ]);

        return response()->json(['success' => true]);
    }
    public function hapus($id)
    {
        $kabar_desa = uploadberita::find($id);
        if (!$kabar_desa) {
            return redirect()->back()->with('error', 'Gambar tidak ditemukan.');
        }

        // Hapus berkas gambar dari penyimpanan
        if (file_exists(public_path('data_foto_berita/' . $kabar_desa->foto))) {
            unlink(public_path('data_foto_berita/' . $kabar_desa->foto));
        }

        // Hapus data dari database
        $kabar_desa->delete();

        // Menambahkan SweetAlert2 untuk memberikan pesan
        return redirect()->back()->with('success', 'Agenda berhasil dihapus.');
    }
}
