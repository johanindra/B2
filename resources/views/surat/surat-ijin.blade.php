@php
    $detail_surat = session('detail_surat');
    $ttd = session('ttd');
    $laporan = session('laporan');
@endphp
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SURAT IJIN</title>
    <link rel="stylesheet" href="{{ asset('assets/css/surat.css') }}">
    <script>
        function printPage() {
            window.print();
        }

        window.onload = function() {
            if ({{ $ttd->print ?? 'false' }}) {
                printPage();
            }
        };
    </script>
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
                <p>SURAT KETERANGAN IJIN TIDAK MASUK KERJA</p>
                <p>Nomor : 474 / …. / 411.501.03 /
                    @php
                        $tahun_sekarang = date('Y');
                        echo $tahun_sekarang;
                    @endphp.
                </p>
            </div>
            <p class="isi-surat1">Yang bertanda tangan dibawah ini kami
                Kepala Desa Pesudukuh Kecamatan Bagor Kabupaten Nganjuk menerangkan dengan sebanarnya bahwa :</p>
            <table>
                <tr>

                <tr>
                    <td style="width: 5%;"></td>
                    <td style="width: 33%;">Nama</td>
                    <td style="width: 1%;">:</td>
                    <td style="width: auto;">
                        {{ $detail_surat->Nama }}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>NIK</td>
                    <td>:</td>
                    <td>
                        {{ $detail_surat->Nik }}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        {{ $detail_surat->Jenis_Kelamin }}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Tempat/Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        {{ $detail_surat->Tempat_tanggal_lahir }}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Kewarganegaraan</td>
                    <td>:</td>
                    <td>
                        {{ $detail_surat->Kewarganegaraan }}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        {{ $detail_surat->Agama }}
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td>
                        {{ $detail_surat->Pekerjaan }}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        {{ $detail_surat->Alamat }}
                    </td>
                </tr>
                <tr style="vertical-align: top;">
                    <td></td>
                    <td>Tempat Kerja</td>
                    <td>:</td>
                    <td>
                        {{ $detail_surat->Tempat_kerja }}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Bagian</td>
                    <td>:</td>
                    <td>
                        {{ $detail_surat->Bagian }}
                    </td>
                </tr>
                <!-- Tambahkan baris untuk informasi lainnya -->
            </table>
            <p class="keterangan">Sesuai dengan nama yang tertera diatas, surat keterangan / pengantar ini
                digunakan untuk keperluan ijin tidak masuk kerja pada tanggal

                @if ($laporan && isset($laporan[0]->tanggal))
                        {{ \Carbon\Carbon::parse($laporan[0]->tanggal)->locale('id')->translatedFormat('d F Y') }}
                    @else
                        {{ \Carbon\Carbon::now()->locale('id')->translatedFormat('d F Y') }}
                    @endif .

                pada tempat kerja yang Bapak/Ibu pimpin karena
                {{ $detail_surat->Alasan }}.
            </p>
            <p>Demikian surat keterangan/pengantar ini kami buat untuk dapat dipergunakan sebagaimana mestinya dan penuh
                tanggung jawab.
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
                            {{ $ttd->pangkat }}
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
