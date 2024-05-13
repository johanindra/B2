@extends('layout')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="hero-slider">
            <!-- Add your image URLs here -->
            <img src="{{ asset('assets/img/hero-bg.jpg') }}" alt="Slide 1">
            <img src="{{ asset('assets/img/foto perangkat desa.jpg') }}" alt="Slide 2">
            <img src="{{ asset('assets/img/hero-bg2.jpg') }}" alt="Slide 3">
        </div>

        <div class="container hero-content" data-aos="zoom-out" data-aos-delay="100">
            <div class="row">
                <div class="col-xl-6 texs-center">
                    <h1>Selamat datang di Website<br>Desa Pesudukuh</h1>
                    <h2>Mempermudah dalam Pengajuan Surat<br>kepada Pemerintah Desa</h2>
                    <a href="#services" class="btn-get-started scrollto">Mulai</a>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const heroSlider = document.querySelector('.hero-slider');
            const images = Array.from(heroSlider.querySelectorAll('img'));
            let currentSlide = 0;

            function nextSlide() {
                images[currentSlide].style.opacity = 0;
                currentSlide = (currentSlide + 1) % images.length;
                images[currentSlide].style.opacity = 1;
            }

            // Change slide every 5 seconds (5000 milliseconds)
            setInterval(nextSlide, 5000);
        });
    </script>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Visi Misi Desa Pesudukuh</h2>
                    <h3>Sambutan Kepala Desa Pesudukuh</h3>
                    <p>
                        Kami senang Anda sudah berkunjung, semoga melalui situs web ini kami dapat memberikan segala
                        kemudahan dalam pengajuan surat - surat kepada pemerintah desa kami. Situs web ini merupakan salah
                        satu wujud dari komitmen pemerintah desa, pada pentingnya digitalisasi dan efisienensi zaman.
                        <br><br>{{ $kepalaDesa->nama }}, Kepala Desa Pesudukuh
                    </p>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-briefcase"></i>
                            <h4>Visi Desa Pesudukuh</h4>
                            <p>{{ $visi->isi }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-card-checklist"></i>
                            <h4>Misi Desa Pesudukuh</h4>
                            @php
                                // Memisahkan teks berdasarkan titik dan menghapus item yang tidak diperlukan
                                $misiItems = explode('.', $misi->isi);

                                // Menghapus item yang hanya angka atau kosong
                                $misiItems = array_unique(
                                    array_filter($misiItems, function ($item) {
                                        return !empty(trim($item)) && !is_numeric(trim($item));
                                    }),
                                );
                            @endphp

                            <ol>
                                @foreach ($misiItems as $item)
                                    <li>{{ trim($item) }}</li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">
                    <div class="content col-xl-5 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Tentang Aplikasi E-LaDes</h3>
                            <p>
                                Aplikasi Pengajuan Surat Desa E-LaDes adalah inovasi terbaru dari Pemerintah Desa untuk
                                mempermudah dan mempercepat proses pengajuan surat-surat administratif bagi warga. Dengan
                                aplikasi ini, warga dapat mengakses layanan pengajuan surat secara praktis dan efisien
                                melalui perangkat seluler mereka.
                            </p>
                            <a href="#tabs" class="btn-get-started scrollto"><span>Sampel Surat</span> <i
                                    class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bx bx-file"></i>
                                    <h4>Pengajuan SKCK</h4>
                                    <p>Pengajuan Surat Keterangan Catatan Kepolisian</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <i class="bx bx-file"></i>
                                    <h4>Pengajuan SKTM</h4>
                                    <p>Pengajuan Surat Keterangan Tidak Mampu</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bx bx-file-blank"></i>
                                    <h4>Pengajuan Surat Izin</h4>
                                    <p>Pengajuan Surat Izin Tidak Masuk Kerja</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bx bx-file-blank"></i>
                                    <h4>Pengajuan Surat Kematian</h4>
                                    <p>Pengajuan Surat Keterangan Kematian</p>
                                </div>
                                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                    <i class="bx bx-file-blank"></i>
                                    <h4>Pengajuan Surat Keterangan Gaji</h4>
                                    <p>Pengajuan Surat Keterangan Gaji Bulanan</p>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- Counts Section -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">
                <!-- Memusatkan baris dan kolom -->
                <div class="row justify-content-center">
                    <div class="col-lg-2 col-md-4 col-12"> <!-- col-12 memastikan kolom satu-satu pada layar kecil -->
                        <div class="count-box">
                            <i class="bi bi-file-earmark-text"></i>
                            <span class="purecounter" data-purecounter-start="0" data-purecounter-end="{{ $suratSkck }}"
                                data-purecounter-duration="1"></span>
                            <p>Surat Keterangan Catatan Kepolisian</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-12"> <!-- col-12 untuk layar kecil -->
                        <div class="count-box">
                            <i class="bi bi-file-earmark-person-fill"></i>
                            <span class="purecounter" data-purecounter-start="0" data-purecounter-end="{{ $suratSktm }}"
                                data-purecounter-duration="1"></span>
                            <p>Surat Keterangan Tidak Mampu</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-12">
                        <div class="count-box">
                            <i class="bi bi-file-earmark-bar-graph-fill"></i>
                            <span class="purecounter" data-purecounter-start="0" data-purecounter-end="{{ $suratIzin }}"
                                data-purecounter-duration="1"></span>
                            <p>Surat Izin Tidak Masuk Kerja</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-12">
                        <div class="count-box">
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span class="purecounter" data-purecounter-start="0" data-purecounter-end="{{ $suratKematian }}"
                                data-purecounter-duration="1"></span>
                            <p>Surat Keterangan Kematian</p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-12">
                        <div class="count-box">
                            <i class="bi bi-briefcase-fill"></i>
                            <span class="purecounter" data-purecounter-start="0"
                                data-purecounter-end="{{ $suratPenghasilan }}" data-purecounter-duration="1"></span>
                            <p>Surat Keterangan Penghasilan</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Tabs Section ======= -->
        <section id="tabs" class="tabs">
            <div class="container" data-aos="fade-up">
                <ul class="nav nav-tabs row d-flex">
                    <li class="nav-item col-3">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <i class="ri-file-text-line"></i>
                            <h4 class="d-none d-lg-block">Pengajuan Pengantar SKCK</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <i class="ri-file-user-line"></i>
                            <h4 class="d-none d-lg-block">Pengajuan SKTM</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <i class="ri-file-2-line"></i>
                            <h4 class="d-none d-lg-block">Pengajuan Surat Izin</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <i class="ri-file-user-line"></i>
                            <h4 class="d-none d-lg-block">Pengajuan Surat Kematian</h4>
                        </a>
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
                            <i class="ri-file-text-line"></i>
                            <h4 class="d-none d-lg-block">Pengajuan Surat Keterangan Gaji</h4>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up"
                                data-aos-delay="100">
                                <h3>Surat Keterangan Adat Istiadat: Kepribadian Terhormat dan Tidak Tersangkut Perkara
                                    Polisi</h3>
                                <p class="fst-italic">
                                    Surat keterangan ini diberikan kepada warga desa yang memiliki perilaku terhormat dan
                                    tidak pernah tersangkut dalam perkara polisi seperti mencuri, main judi, memakai
                                    narkoba, pembunuhan, pemerkosaan, dan pelanggaran hukum serius lainnya.
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> Merupakan individu yang menjunjung tinggi
                                        nilai-nilai adat istiadat desa.</li>
                                    <li><i class="ri-check-double-line"></i> Tidak pernah terlibat dalam tindakan kriminal
                                        seperti mencuri, main judi, atau menggunakan narkoba.</li>
                                    <li><i class="ri-check-double-line"></i> Mempunyai reputasi sebagai warga desa yang
                                        dapat diandalkan dan patuh pada norma-norma sosial.</li>
                                </ul>
                                <p>
                                    Surat keterangan ini ditujukan untuk memberikan apresiasi dan pengakuan terhadap
                                    perilaku baik dan kontribusi positif yang telah diberikan oleh warga desa. Semoga surat
                                    ini dapat menjadi bukti nyata dari komitmen warga desa dalam menjaga keamanan,
                                    ketertiban, dan keharmonisan lingkungan.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="assets/img/tabs-1.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Surat Keterangan Tidak Mampu: Untuk Masyarakat Dengan Kondisi Ekonomi Tidak Berkecukupan
                                </h3>
                                <p class="fst-italic">
                                    Surat Keterangan Tidak Mampu adalah dokumen resmi yang dikeluarkan oleh pemerintah untuk
                                    menunjukkan bahwa seseorang tidak mampu secara finansial untuk melaksanakan suatu
                                    kewajiban atau kegiatan tertentu. Dokumen ini sering kali diperlukan untuk mendapatkan
                                    bantuan sosial, pendaftaran sekolah, atau keperluan administratif lainnya.
                                </p>
                                <p class="fst-italic">
                                    Surat ini dikeluarkan berdasarkan kondisi keuangan dan sosial dari pihak yang memohon.
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> Surat ini membantu pihak berwenang untuk
                                        mengetahui kondisi finansial seseorang.</li>
                                    <li><i class="ri-check-double-line"></i> Dokumen ini bisa diperlukan untuk mendapatkan
                                        bantuan dari pemerintah atau lembaga sosial lainnya.</li>
                                    <li><i class="ri-check-double-line"></i> Pemohon harus memberikan informasi yang jujur
                                        terkait kondisi finansialnya.</li>
                                    <li><i class="ri-check-double-line"></i> Surat ini memiliki masa berlaku tertentu dan
                                        mungkin memerlukan perpanjangan jika masih dibutuhkan.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/tabs-2.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Surat Izin Tidak Masuk Kerja: Ijin Alasan Ketidakhadiran Kerja</h3>
                                <p>
                                    Surat izin tidak masuk kerja merupakan suatu tindakan yang diambil ketika seseorang
                                    tidak dapat hadir dalam pekerjaan dalam jangka waktu tertentu. Dokumen ini berfungsi
                                    sebagai pemberitahuan resmi kepada atasan mengenai alasan ketidakhadiran dan memberikan
                                    klarifikasi terkait hal tersebut.
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> Surat ini berisi penjelasan rinci mengenai
                                        alasan tidak bisa hadir, seperti sakit, urusan keluarga, atau keadaan darurat
                                        lainnya.</li>
                                    <li><i class="ri-check-double-line"></i> Penggunaan surat izin ini bertujuan agar
                                        atasan memiliki pemahaman yang jelas tentang situasi yang dihadapi oleh individu
                                        tersebut.</li>
                                    <li><i class="ri-check-double-line"></i> Dokumen ini juga dapat digunakan sebagai bukti
                                        resmi jika diperlukan.</li>
                                </ul>
                                <p class="fst-italic">
                                    Surat izin tidak masuk kerja membantu menciptakan komunikasi yang efektif antara
                                    individu dan pihak yang berwenang, memberikan pengertian terhadap keadaan yang dihadapi,
                                    dan menjaga transparansi dalam hubungan pekerjaan.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/tabs-3.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Surat Keterangan Kematian: Untuk Masyarakat Yang Baru Meninggal Dunia</h3>
                                <p>
                                    Surat Keterangan Kematian adalah dokumen resmi yang dikeluarkan oleh pemerintah atau
                                    instansi yang berwenang untuk memberikan informasi resmi terkait kematian seseorang.
                                    Dokumen ini biasanya diperlukan untuk keperluan administratif, penyelesaian harta
                                    warisan, klaim asuransi, dan proses lain yang melibatkan data kematian.
                                </p>
                                <p class="fst-italic">
                                    Surat ini berisi informasi penting seperti nama, tanggal kematian, dan tempat kematian.
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> Surat ini diperlukan untuk mengurus
                                        administrasi terkait kematian seseorang.</li>
                                    <li><i class="ri-check-double-line"></i> Informasi yang akurat dan lengkap perlu
                                        disertakan dalam surat ini.</li>
                                    <li><i class="ri-check-double-line"></i> Dokumen ini dapat digunakan untuk berbagai
                                        proses hukum dan administratif.</li>
                                    <li><i class="ri-check-double-line"></i> Masyarakat umumnya membutuhkan surat
                                        keterangan kematian untuk menghindari masalah hukum dan administratif.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/tabs-4.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane" id="tab-5">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>Surat Keterangan Gaji: Keterangan Gaji Untuk Masyarakat Non-PNS</h3>
                                <p>
                                    Surat Keterangan Gaji adalah dokumen yang diperlukan untuk memberikan informasi mengenai
                                    penghasilan atau pendapatan seorang individu dalam suatu periode waktu tertentu. Dokumen
                                    ini biasanya diperlukan dalam berbagai situasi seperti pendaftaran pinjaman, pembelian
                                    properti, atau keperluan administratif lainnya.
                                </p>
                                <ul>
                                    <li><i class="ri-check-double-line"></i> Menyediakan informasi detil mengenai jumlah
                                        penghasilan atau pendapatan per bulan.</li>
                                    <li><i class="ri-check-double-line"></i> Digunakan untuk keperluan administratif
                                        seperti pendaftaran pinjaman atau pembelian properti.</li>
                                    <li><i class="ri-check-double-line"></i> Dapat diandalkan sebagai bukti penghasilan
                                        yang sah.</li>
                                </ul>
                                <p class="fst-italic">
                                    Surat ini membantu pihak yang membutuhkan informasi penghasilan untuk membuat keputusan
                                    yang tepat dalam proses administratif tertentu.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/tabs-5.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Tabs Section -->

        <!-- ======= Agenda Desa Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Agenda Desa</h2>
                    <p>Berikut adalah agenda terkini dari Desa Pesudukuh untuk kepentingan bersama:</p>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($agendaDesa as $agenda)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="{{ url('/data_foto_berita/' . $agenda->foto) }}" class="img-fluid"
                                    alt="Agenda {{ $agenda->judul }}">
                                <div class="portfolio-info">
                                    <h4>{{ $agenda->judul }}</h4>
                                    <p>{{ $agenda->tanggal }}</p>
                                    <div class="portfolio-links">
                                        <a href="{{ url('/data_foto_berita/' . $agenda->foto) }}"
                                            data-gallery="portfolioGallery" class="portfolio-lightbox"
                                            title="{{ $agenda->judul }}"><i class="bx bx-plus"></i></a>
                                        <a href="{{ route('agenda.show', ['id_berita' => $agenda->id_berita]) }}"
                                            title="Lihat Detail">
                                            <i class="bx bx-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Agenda Desa Section -->

        <!-- ======= Struktur Staff Desa Section ======= -->
        <section id="team" class="team_member section-padding">
            <div class="container">
                <div class="section-title">
                    <h2>Struktur Pemerintahan Desa</h2>
                    <p>Berikut adalah struktur pemerintahan desa kami.</p>
                </div>
                <div class="row text-center">
                    @foreach ($strukturDesa as $anggota)
                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay="0.1s" data-wow-offset="0">
                            <div class="our-team">
                                <div class="team_img">
                                    @if (!empty($anggota->foto_profil) && file_exists(public_path('/data_foto_perangkat/' . $anggota->foto_profil)))
                                        <img src="{{ url('/data_foto_perangkat/' . $anggota->foto_profil) }}"
                                            alt="Profil {{ $anggota->nama }}" style="width: 100px; height: 100px;">
                                    @else
                                        <img src="{{ asset('assets/img/team/team-1.jpg') }}" alt="Default Foto"
                                            style="width: 100px; height: 100px;">
                                    @endif
                                </div>
                                <div class="team-content">
                                    <h3 class="title">{{ $anggota->nama }}</h3>
                                    <span class="post">{{ $anggota->pangkat }}</span>
                                </div>
                            </div>
                            <br>
                        </div>
                    @endforeach

                </div><!--- END ROW -->
            </div><!--- END CONTAINER -->
        </section>

    </main><!-- End #main -->
@endsection
