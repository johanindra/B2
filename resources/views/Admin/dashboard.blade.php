<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>E-LaDes - Dashboard Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <!-- <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- tabel -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Memuat DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <!-- tabel end -->

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/styless.css') }}" rel="stylesheet">
    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


    <!-- ======= Sidebar ======= -->
    @include('Admin.includes.sidebar')

    <!-- Main content -->
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Surat Masuk Card -->
                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card sales-card">
                                <a class="card-body" href="{{ route('pengajuan')}}">
                                    <h5 class="card-title">Surat Masuk</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-envelope"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $dataMasuk }}</h6>
                                            <span class="text-primary small pt-1 fw-bold">Hari Ini</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Surat Masuk Card -->

                        <!-- Laporan Card -->
                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card revenue-card">
                                <a class="card-body" href="{{ route('laporan')}}">
                                    <h5 class="card-title">Laporan</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-file-text"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $selesaibulanini }}</h6>
                                            <span class="text-success small pt-1 fw-bold">Bulan Ini</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <!-- End Laporan Card -->

                        <!-- Agenda Desa Card -->
                        <div class="col-xxl-4 col-md-4">
                            <div class="card info-card customers-card">
                                <a class="card-body" 
                                href="{{ route('kabar-desa') }}"
                                >
                                    <h5 class="card-title">Agenda Desa</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-newspaper"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $jumlahkabardesa }}</h6>
                                            <span class="text-danger small pt-1 fw-bold">Tahun Ini</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Customers Card -->

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">

                                {{-- <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div> --}}

                                <div class="card-body">
                                    <h5 class="card-title">Grafik Pengajuan</h5>

                                    <!-- Line Chart -->
                                    <div id="reportsChart"></div>
                                    <!-- resources/views/your-view.blade.php -->

                                    <!-- resources/views/your-view.blade.php -->


                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            // Logika pengambilan data dari database
                                            const suratmasuk = @json($dataMasuk);
                                            const chartData = @json($data);
                                            const selesaibulanini = @json($selesaibulanini);

                                            // Logika pembuatan grafik
                                            const seriesData = [];
                                            const categories = [];

                                            const sortedData = chartData.sort((a, b) => new Date(a.tanggal) - new Date(b.tanggal));

                                            sortedData.forEach(item => {
                                                if (!seriesData.find(series => series.name === item.kode_surat)) {
                                                    seriesData.push({
                                                        name: item.kode_surat,
                                                        data: []
                                                    });
                                                }

                                                const series = seriesData.find(series => series.name === item.kode_surat);
                                                series.data.push(item.total);

                                                if (!categories.includes(item.tanggal)) {
                                                    categories.push(item.tanggal);
                                                }
                                            });

                                            // Gunakan seriesData dan categories dalam chart
                                            new ApexCharts(document.querySelector("#reportsChart"), {
                                                series: seriesData,
                                                chart: {
                                                    height: 350,
                                                    type: 'area',
                                                    toolbar: {
                                                        show: false
                                                    },
                                                },
                                                markers: {
                                                    size: 5
                                                },
                                                colors: ['#4154f1', '#2eca6a', '#ff771d',
                                                    '#fcba03', '#8a2be2', '#ff6347',
                                                    '#4682b4', '#8b4513', '#20b2aa',
                                                    '#d2691e'
                                                ],
                                                fill: {
                                                    type: "gradient",
                                                    gradient: {
                                                        shadeIntensity: 1,
                                                        opacityFrom: 0.3,
                                                        opacityTo: 0.4,
                                                        stops: [0, 90, 100]
                                                    }
                                                },
                                                dataLabels: {
                                                    enabled: false
                                                },
                                                stroke: {
                                                    curve: 'smooth',
                                                    width: 2
                                                },
                                                xaxis: {
                                                    type: 'datetime',
                                                    categories: categories.map(date => new Date(date).getTime()),
                                                },
                                                tooltip: {
                                                    x: {
                                                        format: 'dd/MM'
                                                    },
                                                }
                                            }).render();
                                        });
                                    </script>





                                    <!-- End Line Chart -->

                                </div>
                                {{-- end card chart line --}}

                            </div>
                        </div><!-- End Reports -->

                        <!-- Recent Sales -->
                        @include('Admin.Tabel.tabel-dashboard')
                       <!-- End Recent Sales -->



                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">
                    <!-- agenda desa -->
                    @include('Admin.Tabel.agenda')
                    <!-- End agenda desa -->

                </div><!-- End Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/apexcharts') }}"></script>
    {{-- <script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js') }}"></script> --}}
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendors/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendors/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/mainjs.js') }}"></script>

</body>

</html>
