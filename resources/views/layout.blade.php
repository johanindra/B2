<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-Layang Desa</title>
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

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/styleslanding.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  @include('Landing.navbar')

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Hubungi Kami</h3>
              <p class="pb-3"><em>Pemerintah Desa Pesudukuh</em></p>
              <p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15819.066793693024!2d111.86862000000002!3d-7.60035!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e784b5a64ac9f07%3A0x427953bbea055486!2sBalai%20Desa%20Pesudukuh!5e0!3m2!1sid!2sid!4v1708931971602!5m2!1sid!2sid" width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>
                <strong>No.Telp(Wa):</strong> <a href="https://wa.me/62851272315874">(+62) 8512 7231 5874<br></a>
                <strong>Email:</strong> <a href="mailto:desapesudukuh@gmail.com">desapesudukuh@gmail.com<br></a>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links" style="margin-left: 75px;">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero" class="btn-get-started scrollto">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services" class="btn-get-started scrollto">Visi-Misi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about" class="btn-get-started scrollto">Tentang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio" class="btn-get-started scrollto">Pengumuman</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team" class="btn-get-started scrollto">Susunan Pemerintahan</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter" style="margin-left: 75px; margin-top: 20px;">
            <h4>Download E-LaDes Mobile App</h4>
            <p>Dapatkan aplikasi mobile E-LaDes untuk mengakses layanan kami untuk mengajukan surat dimanapun dan kapanpun.</p>
            <a class="logo"><img src="assets/img/lades.png" alt="Logo" style="height: 120px; width: 250px; margin-left: 10px;"><br></a>
            <span style="text-align: center; font-size: 14px; font-weight: bold; align-items: center;">
              Elektronik-Layang Desa
            </span>
            <br>
            <a href="forms/berkas/apk/Mobile1.2.apk" class="btn btn-primary" style="margin-top: 10px;">Download Now</a>
          </div>

          <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
              <div class="copyright">
                <div class="logo-wrapper">
                  <img src="{{ asset('assets/img/logo.png') }}" height="50dp" width="50dp">
                </div>
                <div class="text-wrapper">
                  &copy; Copyright <strong><span>Kelompok Kocak</span></strong>. All Rights Reserved<br>
                  Designed by <a href="https://bootstrapmade.com/">Kocak Team</a>
                </div>
              </div>

              <style>
                .logo-wrapper {
                  float: left;
                  margin-right: 10px;
                }

                .text-wrapper {
                  overflow: hidden;
                }
              </style>

            </div>
            <div class="social-links text-center text-md-end pt-3 pt-md-0">
              <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> -->
              <a href="https://www.instagram.com/e_layangdesa?igsh=MXBkMTM3azExOTlqNw==" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://wa.me/6281357743268" class="google-plus"><i class="bx bxl-whatsapp"></i></a>
              <a href="https://github.com/johanindra/B2.git" class="linkedin"><i class="bx bxl-github"></i></a>
            </div>
          </div>
  </footer><!-- End Footer -->


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