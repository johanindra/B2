<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function skck()
    {
        return view('surat.skck');
    }

    public function suratIjin()
    {
        return view('surat.surat-ijin');
    }

    public function suratMati()
    {
        return view('surat.surat-mati');
    }

    public function suratPenghasilan()
    {
        return view('surat.surat-penghasilan');
    }

    public function sktm()
    {
        return view('surat.sktm');
    }
}

