@php
    $detail_surat = session('detail_surat');
    $ttd = session('ttd');
    $laporan = session('laporan');
    // dd($ttd);
@endphp
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKTM</title>
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
        <div class="isi-surat" style="line-height: 1.4;">
            <div class="nomer-surat">
                <p>SURAT KETERANGAN TIDAK MAMPU</p>
                <p>Nomor : 474 / ... / 411.501.03 /
                    @php
                    $tahun_sekarang = date('Y');
                    echo $tahun_sekarang;
                @endphp.
                </p>
            </div>
            <p class="isi-surat1" style="margin-top: 30px;">Yang bertanda tangan dibawah ini Kami Kepala Desa Pesudukuh
                Kecamatan Bagor Kabupaten Nganjuk, menerangkan dengan sebenarnya bahwa :</p>
            <table style="vertical-align: top; ">
                <tr>

                <tr>
                    <td style="width: 0%;">1</td>
                    <td style="width: 0%;">-</td>
                    <td style="width: 30%;">Nama Bapak</td>
                    <td style="width: 0%;">:</td>
                    <td style="width: auto;">
                        {{$detail_surat->nama_bapak}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>-</td>
                    <td>Tempat Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        {{$detail_surat->tempat_tanggal_lahir_bapak}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>-</td>
                    <td>Pekerjakan </td>
                    <td>:</td>
                    <td>
                        {{$detail_surat->pekerjaan_bapak}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>-</td>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        {{$detail_surat->pekerjaan_bapak}}
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>-</td>
                    <td>Nama Ibu</td>
                    <td>:</td>
                    <td>
                        {{$detail_surat->nama_ibu}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>-</td>
                    <td>Tempat Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        {{$detail_surat->tampat_tanggal_lahir_ibu}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>-</td>
                    <td>pekerjaan</td>
                    <td>:</td>
                    <td>
                        {{$detail_surat->pekerjaan_ibu}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>-</td>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        {{$detail_surat->alamat_ibu}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="5">benar – benar orang tua dari seorang anak :</td>

                </tr>

                <tr>
                    <td></td>
                    <td>-</td>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        {{$detail_surat->nama_anak}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>-</td>
                    <td>Tempat Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        {{$detail_surat->tampat_tanggal_lahir_anak}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>-</td>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        {{$detail_surat->jenis_kelamin_anak}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>-</td>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        {{$detail_surat->alamat_anak}}
                    </td>
                </tr>
                <!-- Tambahkan baris untuk informasi lainnya -->
            </table>
            <p class="keterangan">Sehubungan dengan orang tua dari anak tersebut diatas
                tidak mampu , maka dengan dibuatnya surat keterangan ini dapatnya dipergunakan
                untuk melengkapi persyaratan keringanan biaya sekolah.
            </p>
            <p>Demikian surat keterangan ini dibuat dengan sebenarnya dan dapatnya dipergunakan bagai-mana mestinya.
            </p>
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
                            {{$ttd->pangkat}}
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
