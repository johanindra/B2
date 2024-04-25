@php
    $detail_surat = session('detail_surat');
    $ttd = session('ttd');
    $laporan = session('laporan');
    // dd($detail_surat);
@endphp
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Kematian</title>
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
                <p>SURAT KEMATIAN</p>
                <p>Nomor : 474.3 / .... / 411.501.03 /
                    @php
                        $tahun_sekarang = date('Y');
                        echo $tahun_sekarang;
                    @endphp
                </p>
            </div>
            <p class="isi-surat1">Yang bertanda tangan dibawah ini :</p>
            <table>
                <tr>
                    <td style="width: 10%; text-align: center;">-</td>
                    <td style="width: 33%;">Nama</td>
                    <td style="width: 1%;">:</td>
                    <td style="width: auto;">
                        {{ $ttd->nama }}
                    </td>
                </tr>

                <tr>
                    <td class="text-center">-</td>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>
                        {{ $ttd->pangkat }}
                    </td>
                </tr>
                <tr>
                    <td class="text-center">-</td>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        Desa Pesudukuh Kecamatan Bagor Kabupaten Nganjuk
                    </td>
                </tr>
            </table>

            <p class="">Menerangkan dengan sebenarnya bahwa :</p>

            <table>
                <tr>
                    <td style="width: 10%; text-align: center;">-</td>
                    <td style="width: 33%;">Nama</td>
                    <td style="width: 1%;">:</td>
                    <td style="width: auto;">
                        {{ $detail_surat->nama }}
                    </td>
                </tr>

                <tr>
                    <td class="text-center">-</td>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        {{ $detail_surat->jenis_kelamin }}
                    </td>
                </tr>
                <tr>
                    <td class="text-center">-</td>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        {{ $detail_surat->alamat }}
                    </td>
                </tr>
            </table>
            <p class="keterangan">Benar-benar orang tersebut diatas telah meninggal di Desa Pesudukuh
                Kecamatan Bagor Kabupaten Nganjuk pada {{ $detail_surat->tanggal }}
                .</p>
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
                            {{ $ttd->nama }}
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
