<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>E-LaDes - Profil Desa</title>
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
</head>

<body>

    <!-- ======= Sidebar ======= -->
    @include('Admin.includes.sidebar')

    <!-- Main content -->
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profil Desa</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Profil Desa</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                {{-- <div class="col-xl-8"> --}}
                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            @include('Admin.includes.profilDesa')
                            <div class="tab-content pt-2">
                                <!-- ini bagian profil desa -->
                                @include('Admin.ProfilDesa.profildesa')
                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                                    <!-- bagian perangkat desa -->
                                    @include('Admin.ProfilDesa.perangkatdesa')
                                </div>
                                <div class="tab-pane fade pt-3" id="profile-settings">
                                    @include('Admin.ProfilDesa.editdatadesa')
                                </div>
                                <div class="tab-pane fade pt-3 @if(session('activeTab') == 'profile-change-password') show active @endif" id="profile-change-password">
                                    @include('Admin.ProfilDesa.ubahpassword')
                                </div>
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        // Dapatkan tab yang harus aktif dari data yang dikirimkan dari controller
                                        var activeTab = "{{ session('activeTab') }}";
                                
                                        // Temukan elemen tab yang sesuai
                                        var tabToActivate = document.getElementById(activeTab);
                                
                                        // Periksa apakah elemen tab ditemukan
                                        if (tabToActivate) {
                                            // Tambahkan kelas "show" dan "active" pada tab yang harus aktif
                                            tabToActivate.classList.add("show");
                                            tabToActivate.classList.add("active");
                                        }
                                    });
                                </script>
                                
                            </div><!-- End Bordered Tabs -->
                        </div>
                    </div>
                {{-- </div> --}}
                {{-- <div class="col-xl-4">
                    <!-- foto perangkat -->
                    @include('Admin.ProfilDesa.detailperangkat')
                </div> --}}
            </div>
        </section>

    </main><!-- End #main -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->

    <!-- tabel -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Memuat DataTables -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>


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


    <!-- kalau mau ubah js tabel di sini -->
    <script src="{{ asset('assets/js/tabel.js') }}"></script>


</body>

</html>