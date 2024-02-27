<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-LaDes - Dashboard</title>
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}">
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        @include('Admin.includes.sidebar')


        <!-- ========================= Main ==================== -->
        <div class="main">
        @include('Admin.includes.topbar')

            <div class="class-name">
                <div class="recentOrders">
                    <span class="cardHeader2">
                        <h2>Dashboard</h2>
                    </span>
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Surat Masuk</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="mail-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">8</div>
                        <div class="cardName">Laporan</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="documents-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Agenda Desa</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="newspaper-outline"></ion-icon>
                    </div>
                </div>

                <!-- <div class="card">
                    <div>
                        <div class="numbers">6</div>
                        <div class="cardName">Laporan</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="document-outline"></ion-icon>
                    </div>
                </div> -->
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Laporan Bulan Ini</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Jenis Surat</td>
                                <td>Tanggal Selesai</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>prayoga</td>
                                <td>Kematian</td>
                                <td>11-02-2024</td>
                                <td><span class="status delivered">Selesai</span></td>
                            </tr>

                            <tr>
                                <td>Rocky Gerung</td>
                                <td>Pengantar SKCK</td>
                                <td>11-02-2024</td>
                                <td><span class="status pending">proses</span></td>
                            </tr>

                            <tr>
                                <td>Slepet Imin</td>
                                <td>Perizinan</td>
                                <td>11-02-2024</td>
                                <td><span class="status return">Ditolak</span></td>
                            </tr>

                            <tr>
                                <td>Mas Anies</td>
                                <td>Kematian</td>
                                <td>11-02-2024</td>
                                <td><span class="status pending">Proses</span></td>
                            </tr>

                            <tr>
                                <td>Gilbran</td>
                                <td>Kematian</td>
                                <td>11-02-2024</td>
                                <td><span class="status delivered">Selesai</span></td>
                            </tr>

                            <tr>
                                <td>Prabroro</td>
                                <td>Pengantar SKCK</td>
                                <td>11-02-2024</td>
                                <td><span class="status pending">Proses</span></td>
                            </tr>

                            <tr>
                                <td>Ganjar</td>
                                <td>Kematian</td>
                                <td>11-02-2024</td>
                                <td><span class="status return">Ditolak</span></td>
                            </tr>

                            <tr>
                                <td>Mahfud</td>
                                <td>SKTM</td>
                                <td>11-02-2024</td>
                                <td><span class="status delivered">Selesai</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Surat Masuk</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{ asset('assets/img/customer02.jpg') }}" alt=""></div>
                            </td>
                            <td>
                                <h4>Renaldo <br> <span>SKTM</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{ asset('assets/img/customer01.jpg') }}" alt=""></div>
                            </td>
                            <td>
                                <h4>Janggar <br> <span>Kematian</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{ asset('assets/img/customer02.jpg') }}" alt=""></div>
                            </td>
                            <td>
                                <h4>Milla <br> <span>Pengantar SKCK</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{ asset('assets/img/customer01.jpg') }}" alt=""></div>
                            </td>
                            <td>
                                <h4>Abhit <br> <span>Kematian</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{ asset('assets/img/customer02.jpg') }}" alt=""></div>
                            </td>
                            <td>
                                <h4>Abdul <br> <span>Perizinan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{ asset('assets/img/customer01.jpg') }}" alt=""></div>
                            </td>
                            <td>
                                <h4>Bowo <br> <span>SKTM</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{ asset('assets/img/customer01.jpg') }}" alt=""></div>
                            </td>
                            <td>
                                <h4>Kotem <br> <span>SKTM</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="{{ asset('assets/img/customer02.jpg') }}" alt=""></div>
                            </td>
                            <td>
                                <h4>Sunnah <br> <span>Pengantar SKCK</span></h4>
                            </td>
                        </tr>
                    </table>
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