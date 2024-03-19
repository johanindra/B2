<?php

namespace App\Http\Controllers;

use App\Gambar;
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
        $kabar_desa = Gambar::get();
        return view('Admin.kabar-desa', ['kabar_desa' => $kabar_desa]);
    }

    public function proses_upload(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'keterangan' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');

        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);

        Gambar::create([
            'file' => $nama_file,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->back();
    }
    public function hapus($id)
    {
        $kabar_desa = Gambar::find($id);
        if (!$kabar_desa) {
            return redirect()->back()->with('error', 'Gambar tidak ditemukan.');
        }

        // Hapus berkas gambar dari penyimpanan
        if (file_exists(public_path('data_file/' . $kabar_desa->file))) {
            unlink(public_path('data_file/' . $kabar_desa->file));
        }

        // Hapus data dari database
        $kabar_desa->delete();

        return redirect()->back()->with('success', 'Gambar berhasil dihapus.');
    }
}
