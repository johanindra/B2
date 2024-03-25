<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>E-LaDes - Detail Agenda</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css')}}" integrity="sha512-...">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/styleslanding.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/orgchart.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Presento
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <a href="" class="logo me-auto"><img src="{{ asset('assets/img/lPemerintah2.png') }}" alt="logo"></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ url('/') }}">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('/#services') }}">Visi-Misi</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('/#about') }}">Tentang</a></li>
                    <li><a class="nav-link scrollto active" href="{{ url('/#portofolio') }}">Pengumuman</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('/#team') }}">Susunan Pemerintahan</a></li>
                    <li><a class="nav-link scrollto" href="{{ url('/#footer') }}">Kontak</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="{{ url('/login') }}" class="get-started-btn scrollto">Login</a>
        </div>
    </header><!-- End Header -->




    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li>Detail Agenda</li>
                </ol>
                <h2>Detail Agenda</h2>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider">
                            <img src="assets/img/agenda/agenda-1.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Informasi Agenda</h3>
                            <ul>
                                <li><strong>Nama Agenda</strong>: Lomba 17 Agustus</li>
                                <li><strong>Tanggal Mulai</strong>: 17 Agustus 2024</li>
                                <li><strong>Tanggal Selesai</strong>: 27 Agustus 2024</li>
                                <li><strong>Jam Agenda</strong>: 19.00 WIB - Selesai</li>
                                <li><strong>Tempat Agenda</strong>: Balai Desa Pesudukuh</li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>Deskripsi Agenda</h2>
                            <p>
                                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia.
                                Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia
                                accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt
                                eius.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

    @include('Landing.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>