<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detail_surat;
use App\Models\ttd;
use App\Models\skck;
use App\Models\sktm;
use App\Models\surat_ijin;
use App\Models\surat_mati;
use App\Models\surat_penghasilan;


class PembuatanSurat extends Controller {

    public static function insert(Request $request)
{
    try {
        $data = $request->except('_token');
        if ($request->input('nik')) {
            $validateData = $request->validate([
                'nik' => 'min:16|max:16',
            ]);
        }

        $detail_surat = new detail_surat();
        foreach ($data as $key => $value) {
            $detail_surat->$key = $value;
        }
        // $detail_surat->username = 'admin';
        $detail_surat->username = auth()->user()->username;
        if ($request->input('pekerjaan') === 'Lainnya' && $request->filled('otherPekerjaan')) {
            $detail_surat->pekerjaan = $request->input('otherPekerjaan');
        } else {
            $detail_surat->pekerjaan = $request->input('pekerjaan');
        }

        $kode_surat = $request->input('jenisSurat');
        $ttd = ttd::find($request->input('mengetahui'));
        $ttd->print = true;
        // dd($detail_surat);

        switch ($kode_surat) {
            case 'skck':
                $surat = new skck($detail_surat->toArray());
                $surat->save();
                return redirect()->route('skck')->with(compact('detail_surat', 'ttd'));
            case 'surat_ijin':
                $surat = new surat_ijin($detail_surat->toArray());
                $surat->save();
                return redirect()->route('surat-ijin')->with(compact('detail_surat', 'ttd'));
            case 'surat_kematian':
                $surat = new surat_mati($detail_surat->toArray());
                $surat->save();
                return redirect()->route('surat-mati')->with(compact('detail_surat', 'ttd'));
            case 'surat_penghasilan':
                $surat = new surat_penghasilan($detail_surat->toArray());
                $surat->save();
                return redirect()->route('surat-penghasilan')->with(compact('detail_surat', 'ttd'));
            case 'sktm':
                $surat = new sktm($detail_surat->toArray());
                $surat->save();
                return redirect()->route('sktm')->with(compact('detail_surat', 'ttd'));
            default:
                return redirect()->abort(404);
        }
    } catch (ValidationException $e) {
        return redirect()->back()->withErrors($e->validator)->withInput($request->all());
    } catch (Exception $e) {
        return redirect()->back()->withError('Terjadi kesalahan : '.$e);
    }
}

    public static function preview( Request $request ) {
        try{
        $data = $request->except( '_token' );
        if($request->input('nik')){
            $validateData = $request->validate([
                'nik' => 'min:16|max:16',
            ]);
        }

        $detail_surat = new detail_surat();
        foreach ( $data as $key => $value ) {
            $detail_surat->$key = $value;
        }
        $detail_surat->username = auth()->user()->username;
        if ($request->input('pekerjaan') === 'Lainnya' && $request->filled('otherPekerjaan')) {
            $detail_surat->pekerjaan = $request->input('otherPekerjaan');
        } else {
            $detail_surat->pekerjaan = $request->input('pekerjaan');
        }
        // dd( $data );
        $kode_surat = $request->input( 'jenisSurat' );
        $ttd = ttd::find( $request->input( 'mengetahui' ) );
        // dd( $ttd );
        switch ( $kode_surat ) {
            case 'skck':
            return redirect()->route( 'skck' )->with( compact( 'detail_surat', 'ttd' ) );
            break;
            case 'surat_ijin':
                return redirect()->route( 'surat-ijin' )->with( compact( 'detail_surat', 'ttd' ) );
                break;
            case 'surat_kematian':
            return redirect()->route( 'surat-mati' )->with( compact( 'detail_surat', 'ttd' ) );
            break;
            case 'surat_penghasilan':
            return redirect()->route( 'surat-penghasilan' )->with( compact( 'detail_surat', 'ttd' ) );
            break;
            case 'sktm':
            return redirect()->route( 'sktm' )->with( compact( 'detail_surat', 'ttd' ) );
            break;
            default:
            return redirect()->abort( 404 );
            break;
        }
    } catch (ValidationException $e) {
        return redirect()->back()->withErrors($e->validator)->withInput($request->all());
    } catch (Exception $e) {
        return redirect()->back()->withError('Terjadi kesalahan : '.$e);
    }
    }
}
