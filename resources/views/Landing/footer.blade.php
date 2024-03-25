<footer id="footer" class="text-white text-center text-lg-start bg-dark">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row mt-4">
            <!-- ======= Hubungi Kami Section ======= -->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4 pb-1">Hubungi Kami</h5>

                <!-- Google Maps (Ganti dengan iframe Google Maps kantor desa) -->
                <div class="mb-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.7458408463185!2d111.8675472741291!3d-7.602614292412356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e784b5a64ac9f07%3A0x427953bbea055486!2sBalai%20Desa%20Pesudukuh!5e0!3m2!1sid!2sid!4v1709387718608!5m2!1sid!2sid" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <!-- Informasi Kontak -->
                <ul class="fa-ul" style="margin-left: 1.65em;">
                    <li class="mb-3">
                        <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Jl. Utama No.1, Pesudukuh, Kec. Bagor, Kabupaten Nganjuk, Jawa Timur 64461</span>
                    </li>
                    <li class="mb-3">
                        <span class="fa-li"><i class="fas fa-envelope"></i></span><a href="mailto:info@desakita.com" class="ms-2">info@desakita.com</a>
                    </li>
                    <li class="mb-3">
                        <span class="fa-li"><i class="fas fa-phone"></i></span><a href="https://wa.me/62123456789" class="ms-2">+ 62 123 456 789</a>
                    </li>
                </ul>
            </div>
            <!-- ======= End Hubungi Kami Section -->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">Jam Kerja Desa</h5>

                <table class="table text-center text-white">
                    <tbody class="fw-normal">
                        <tr>
                            <td>Senin - Kamis:</td>
                            <td>08.00 - 16.00</td>
                        </tr>
                        <tr>
                            <td>Jumat:</td>
                            <td>08.00 - 11.00</td>
                        </tr>
                        <tr>
                            <td>Sabtu - Minggu:</td>
                            <td>Libur</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Useful Links -->
                <h5 class="text-uppercase mt-4 mb-2">Useful Links</h5>
                <ul class="list-unstyled" style="margin-top: 20px;">
                    <li><i class="bx bx-chevron-right"></i><a href="javascript:void(0)" onclick="navigateToSection('services')">Visi-Misi</a></li>
                    <li><i class="bx bx-chevron-right"></i><a href="javascript:void(0)" onclick="navigateToSection('about')">Tentang</a></li>
                    <li><i class="bx bx-chevron-right"></i><a href="javascript:void(0)" onclick="navigateToSection('portfolio')">Agenda Desa</a></li>
                    <li><i class="bx bx-chevron-right"></i><a href="javascript:void(0)" onclick="navigateToSection('team')">Susunan Pemerintahan</a></li>
                    <!-- Add more links as needed -->
                </ul>
            </div>

            <script>
                function navigateToSection(sectionId) {
                    var element = document.getElementById(sectionId);
                    if (element) {
                        element.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                }
            </script>

            <!-- ======= Download Aplikasi Mobile Section ======= -->
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">Download Aplikasi Mobile</h5>

                <p style="text-align: justify;">
                    Aplikasi mobile kami memudahkan Anda untuk mendapatkan informasi terkini seputar desa.
                </p>

                <div class="mt-4">
                    <!-- Logo Aplikasi -->
                    <img src="{{ asset('assets/img/lades.png') }}" height="90dp" width="190dp" alt="Aplikasi Logo">
                </div>

                <div class="mt-3">
                    <!-- Deskripsi Aplikasi -->
                    <p style="text-align: justify;">
                        Aplikasi mobile ini memberikan akses cepat dan mudah ke berita, kegiatan, dan informasi penting lainnya
                        di desa kami.
                    </p>
                </div>

                <div class="mt-3">
                    <!-- Tombol Download -->
                    <a href="#" class="btn btn-light btn-lg">Download Aplikasi</a>
                </div>
            </div>
            <!-- ======= End Download Aplikasi Mobile Section -->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                <div class="logo-wrapper">
                    <img src="{{ asset('assets/img/logo.png') }}" height="50dp" width="50dp">
                </div>
                <div class="text-wrapper">
                    &copy; Copyright <strong><span>Kelompok Kocak</span></strong>. All Rights Reserved<br>
                    Designed by <a href="https://wa.me/6281357743268">Kocak Team</a>
                </div>
            </div>

        </div>
        <div class="social-links text-center text-md-end pt-3 pt-md-0">
            <a href="https://www.instagram.com/e_layangdesa?igsh=MXBkMTM3azExOTlqNw==" class="instagram"><i class="bx bxl-instagram" style="font-size: 22px;"></i></a>
            <a href="https://wa.me/6281357743268" class="google-plus"><i class="bx bxl-whatsapp" style="font-size: 22px;"></i></a>
            <a href="https://github.com/johanindra/B2.git" class="linkedin"><i class="bx bxl-github" style="font-size: 22px;"></i></a>
        </div>
    </div>
</footer>