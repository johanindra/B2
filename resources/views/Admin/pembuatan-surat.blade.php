<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>E-LaDes - Pembuatan Surat</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
    <style>
        /* CSS untuk menyembunyikan tombol Submit */
        #submitBtn {
            display: none;
        }

        #previewSuratContainer {
            display: none;
        }
    </style>
</head>

<body>
    <!-- ======= Sidebar ======= -->
    @include('Admin.includes.sidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Pembuatan Surat</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                    <li class="breadcrumb-item">Pembuatan Surat</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <!-- pembuatan surat -->
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form pembuatan Surat</h5>

                            <!-- form pembuatan surat -->
                            @include('Admin.crud.pembuatan-surat')
                            <!-- End form pembuatan surat -->
                        </div>
                    </div>
                </div>


                <!-- preview surat -->
                {{-- <div class="col-lg-6" id="previewSuratContainer">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tampilan Surat</h5>

                            <!-- Advanced Form Elements -->
                            <table class="table table-bordered" id="dynamicTable">
                                <!-- Tabel akan diperbarui secara dinamis -->
                            </table>
                            <div class="mb-3 text-right" id="btn-tampilan">
                                <button type="submit" id="lihat" class="btn btn-warning">Lihat</button>
                                <button type="submit" id="cetak" class="btn btn-primary">Cetak</button>
                                <button type="submit" id="hapus" class="btn btn-danger">Hapus</button>
                            </div>

                            <!-- End General Form Elements -->

                        </div>
                    </div>

                </div> --}}
            </div>
            <!-- preview surat end -->

        </section>

    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendors/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendors/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/mainjs.js') }}"></script>
    <script src="{{ asset('assets/js/jenis-surat.js') }}"></script>

</body>

</html>