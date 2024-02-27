<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-LaDes - Pengajuan</title>
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}">
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
</head>

<body">
    <!-- =============== Navigation ================ -->
    <div class="container">
        @include('Admin.includes.sidebar')


        <!-- ========================= Main ==================== -->
        <div class="main">
            @include('Admin.includes.topbar')


            <div class="class-name">
                <div class="recentOrders">
                    <span class="cardHeader2">
                        <h2>Pengajuan Surat</h2>
                    </span>
                </div>
            </div>


            <div class="details-pengajuan">
                <div class="recentOrders">
                    <span class="cardHeader">
                        <h2>Tabel Pengajuan Surat</h2>
                    </span>

                    <!-- Tabel Pengajuan Surat -->
                    <div class="table-container">
                        <!-- <h2>Tabel Pengajuan Surat</h2> -->
                        <div class="search-container">
                            <input type="text" id="searchInput" placeholder="Cari...">
                        </div>
                        <table id="dataTable">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama Lengkap</th>
                                    <th>Alamat</th>
                                    <th>Jenis Surat</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Isi tabel akan ditambahkan melalui backend atau data statis -->
                                <tr>
                                    <td>1234567890</td>
                                    <td>Pugruk</td>
                                    <td>Jl. Pahlawan No. 123</td>
                                    <td>Surat Keterangan Domisili</td>
                                    <td><a href="#">Lihat Detail</a></td>
                                </tr>
                                <tr>
                                    <td>1234567891</td>
                                    <td>Petruk</td>
                                    <td>Jl. Pahlawan No. 123</td>
                                    <td>SKTM</td>
                                    <td><a href="#">Lihat Detail</a></td>
                                </tr>
                                <tr>
                                    <td>1234567892</td>
                                    <td>Juminten</td>
                                    <td>Jl. Penjajah No. 321</td>
                                    <td>Surat Keterangan Domisili</td>
                                    <td><a href="#">Lihat Detail</a></td>
                                </tr>
                                <!-- Tambahkan baris tambahan sesuai dengan kebutuhan -->
                            </tbody>
                        </table>
                        <div id="pagination" class="pagination-container">
                            <button id="prevBtn">Previous</button>
                            <span id="pageInfo">Page 1 of 1</span>
                            <button id="nextBtn">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>


    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>

</html>