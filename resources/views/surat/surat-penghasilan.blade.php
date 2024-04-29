@php
    $detail_surat = session('detail_surat');
    $ttd = session('ttd');
    $laporan = session('laporan');
    // dd($laporan);
@endphp
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Penghasilan</title>
    <link rel="stylesheet" href="{{ asset('assets/css/surat.css') }}">
    <style>
        /* Gaya tambahan, jika diperlukan */
    </style>
</head>

<body>
    <div class="page-container">
        <div class="kop-container">
            <div class="logo-container">
                <img src="{{ asset('assets/img/surat/logo_surat.png') }}" alt="Logo" style="width: 2.02cm;">
            </div>
            <div class="kop-surat">
                <p>PEMERINTAH KABUPATEN NGANJUK</p>
                <p>KECAMATAN BAGOR</p>
                <p>DESA PESUDUKUH</p>
                <p>Jalan “Utama” Nomor: 01 Telpon: - Kodepos 64461</p>
            </div>
        </div>
        <div class="isi-surat">
            <div class="nomer-surat">

                <p>SURAT KETERANGAN PENGHASILAN</p>

                <p>Nomor : 140 / .... / 411.501.03 /
                    @php
                    $tahun_sekarang = date('Y');
                    echo $tahun_sekarang;
                    @endphp.
                </p>
            </div>
            <p class="isi-surat1">Yang bertandatangan dibawah ini, Kepala Desa Pesudukuh Kecamatan Bagor Kabupaten
                Nganjuk, menerangkan dengan sebenarnya bahwa :</p>
            <table>
                <tr>
                    <td style="width: 10%; text-align: center;">-</td>
                    <td style="width: 33%;">Nama</td>
                    <td style="width: 1%;">:</td>
                    <td style="width: auto;">
                        {{$detail_surat->nama_lengkap}}
                    </td>
                </tr>

                <tr>
                    <td class="text-center">-</td>
                    <td>NIK</td>
                    <td>:</td>
                    <td>
                        {{$detail_surat->nik}}
                    </td>
                </tr>
                <tr>
                    <td class="text-center">-</td>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        {{$detail_surat->jenis_kelamin}}
                    </td>
                </tr>
                <tr>
                    <td class="text-center">-</td>
                    <td>Tempat Tgl.Lahir/Umur</td>
                    <td>:</td>
                    <td>
                        {{$detail_surat->tempat_lahir}}, {{ \Carbon\Carbon::parse($detail_surat->tanggal)->locale('id')->translatedFormat('d F Y') }}

                    </td>
                </tr>
                <tr>
                    <td class="text-center">-</td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>
                        {{$detail_surat->pekerjaan}}
                    </td>
                </tr>
                <tr>
                    <td class="text-center">-</td>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        {{$detail_surat->alamat}}
                    </td>
                </tr>
            </table>

            <p class="isi-surat1">Adalah benar – benar penduduk Desa Pesudukuh Kecamatan Bagor Kabupaten Nganjuk.</p>

            <p class="keterangan">Orang tersebut diatas berpenghasilan yaitu sekitar Rp.{{ number_format($detail_surat->jumlah_penghasilan)}} perbulan. 

                Surat keterangan ini diberikan sebagai {{$detail_surat->kegunaan_surat}}
            </p>
            <p>Demikian surat keterangan ini dibuat dengan sebenarnya atas keterangan

                pemohon dan untuk dipergunakan sebagaimana mestinya.</p>
            <div class="tanda-tangan">
                <table class="ttd">
                    <tr>
                        <td style="width: 55%;"></td>
                        <td>Pesudukuh,
                            @if ($laporan && isset($laporan[0]->tanggal))
                                {{ \Carbon\Carbon::parse($laporan[0]->tanggal)->locale('id')->translatedFormat('d F Y') }}
                            @else
                                {{ \Carbon\Carbon::now()->locale('id')->translatedFormat('d F Y') }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="font-weight: bold;">
                            {{$ttd->nama}}
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
