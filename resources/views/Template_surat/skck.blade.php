<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKCK</title>
    <link href="{{ asset('css/skck.css') }}" rel="stylesheet" type="text/css" >
    <style>
        /* Gaya tambahan, jika diperlukan */
    </style>
</head>

<body>
    <div class="page-container">
        <div class="kop-container">
            <div class="logo-container">
                {{-- <img src="../gambar/logo surat.png" alt="Logo" style="width: 2.02cm;"> --}}
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
                <p>SURAT KETERANGAN ADAT ISTIADAT</p>
                <p>Nomor : 730 / …. / 411.501.03 /
                    {{-- <?php
                    $tahun_sekarang = date("Y");
                    echo $tahun_sekarang;
                    ?>. --}}
                </p>
            </div>
            <p class="isi-surat1">Kami Kepala Desa Pesudukuh Kecamatan Bagor Kabupaten Nganjuk menerangkan dengan
                sebenarnya bahwa :</p>
            <table>
                <tr>

                <tr>
                    <td style="width: 5%;"></td>
                    <td style="width: 33%;">1. Nama</td>
                    <td style="width: 1%;">:</td>
                    <td style="width: auto;">
                        {{-- <?php echo $nama; ?> --}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>2. NIK</td>
                    <td>:</td>
                    <td>
                        {{-- <?php echo $nik; ?> --}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>3. Tempat/Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        {{-- <?php echo $tempat_tanggal_lahir; ?> --}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>4. Kebangsaan</td>
                    <td>:</td>
                    <td>
                        {{-- <?php echo $kebangsaan; ?> --}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>5. Agama</td>
                    <td>:</td>
                    <td>
                        {{-- <?php echo $agama; ?> --}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>6. Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        {{-- <?php echo $jenis_kelamin; ?> --}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>7. Status Perkawinan</td>
                    <td>:</td>
                    <td>
                        {{-- <?php echo $status; ?> --}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>8. Pekerjaan</td>
                    <td>:</td>
                    <td>
                        {{-- <?php echo $pekerjaan; ?> --}}
                    </td>
                </tr>
                <tr style="vertical-align: top;">
                    <td></td>
                    <td>9. Tempat Tinggal</td>
                    <td>:</td>
                    <td>
                        {{-- <?php echo $tinggal ?> --}}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Kecamatan Bagor Kabupaten Nganjuk</td>
                </tr>
                <!-- Tambahkan baris untuk informasi lainnya -->
            </table>
            <p class="keterangan">Sepanjang pengetahuan kami orang tersebut diatas selama bertempat tinggal di Desa
                Pesudukuh, Kecamatan Bagor Kabupaten Nganjuk berkelakuan baik, tidak pernah tersangkut perkara polisi.
            </p>
            <p>Surat keterangan ini berlaku sejak dikeluarkan sampai dengan tanggal
                {{-- <?php echo " " . $tanggal_pengajuan; ?> (tiga bulan sejak dikeluarkan) --}}
            </p>
            <div class="tanda-tangan">
                <table class="ttd">
                    <tr>
                        <td style="width: 55%;"></td>
                        <td>Pesudukuh,
                            {{-- <?php echo " " . $tanggal_pengajuan; ?> --}}
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            {{-- <?php echo $ttd_pangkat; ?> --}}
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
                            {{-- <?php echo $ttd_nama; ?> --}}
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>