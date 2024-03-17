@extends('layout')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="hero-slider">
    <!-- Add your image URLs here -->
    <img src="{{ asset('assets/img/hero-bg.jpg')}}" alt="Slide 1">
    <img src="{{ asset('assets/img/foto perangkat desa.jpg')}}" alt="Slide 2">
    <img src="{{ asset('assets/img/hero-bg2.jpg')}}" alt="Slide 3">
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

  <!-- ======= Clients Section ======= -->
  <!-- <section id="clients" class="clients">
    <div class="container" data-aos="zoom-in">

      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section> -->
  <!-- End Clients Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Visi Misi Desa Pesudukuh</h2>
        <h3>Sambutan Kepala Desa Pesudukuh</h3>
        <p>
          Kami senang Anda sudah berkunjung, semoga melalui situs web ini kami dapat memberikan segala kemudahan dalam pengajuan surat - surat kepada pemerintah desa kami. Situs web ini merupakan salah satu wujud dari komitmen pemerintah desa, pada pentingnya digitalisasi dan efisienensi zaman.
          <br><br>Romi Yumiani, Kepala Desa Pesudukuh
        </p>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <!-- Ganti icon pertama sesuai dengan ikon yang sesuai untuk Visi Desa -->
            <i class="bi bi-briefcase"></i>
            <h4><a href="#">Visi Desa Pesudukuh</a></h4>
            <p>Terwujudnya Tata Kelola Pemerintahan Desa yang Baik dan Transparan Guna Mewujudkan Desa yang Bermarwah.<br><br><br><br><br><br><br><br></p>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <!-- Ganti icon kedua sesuai dengan ikon yang sesuai untuk Misi Desa -->
            <i class="bi bi-card-checklist"></i>
            <h4><a href="#">Misi Desa Pesudukuh</a></h4>
            <p>1.Meningkatkan Budaya Gotong Gorong
              <br>2.keamanan dan ketertiban di lingkungan desa Teluk Dalam
              <br>3.Meningkatkan Program kesehatan, kebersihan desa serta mengusahakan KIS atau BPJS untuk Seluruh Masyarakat melalui Program Pemerintah
              <br>4.Mewujudkan dan meningkatkan serta meneruskan tata kelola Pemerintahan Desa yang baik
              <br>5.Meningkatkan pelayanan yang maksimal kepada masyarakat Desa.
            </p>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- End Services Section -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">

      <div class="row no-gutters">
        <div class="content col-xl-5 d-flex align-items-stretch">
          <div class="content">
            <h3>Tentang Aplikasi E-LaDes</h3>
            <p>
              Aplikasi Pengajuan Surat Desa E-LaDes adalah inovasi terbaru dari Pemerintah Desa untuk mempermudah dan mempercepat proses pengajuan surat-surat administratif bagi warga. Dengan aplikasi ini, warga dapat mengakses layanan pengajuan surat secara praktis dan efisien melalui perangkat seluler mereka.
            </p>
            <a href="#tabs" class="btn-get-started scrollto"><span>Sampel Surat</span> <i class="bx bx-chevron-right"></i></a>
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
                <p>Pengajuan Surat Izin Tidak Masuk Kerja/Sekolah</p>
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

 <!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
  <div class="container" data-aos="fade-up">

    <div class="row d-flex justify-content-between">

      <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
        <div class="count-box">
          <i class="bi bi-file-earmark-text"></i>
          <span id="skckCounter" data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
          <p>Pengajuan SKCK</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
        <div class="count-box">
          <i class="bi bi-file-earmark-text"></i>
          <span id="sktmCounter" data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
          <p>Pengajuan SKTM</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="bi bi-file-earmark-text"></i>
          <span id="izinCounter" data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
          <p>Pengajuan Surat Izin</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="bi bi-file-earmark-text"></i>
          <span id="kematianCounter" data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
          <p>Pengajuan Surat Kematian</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
          <i class="bi bi-file-earmark-text"></i>
          <span id="gajiCounter" data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
          <p>Pengajuan Surat Keterangan Gaji</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Counts Section -->

<script>
  // Simulasi data dinamis
  const skckCounter = 50; // Ganti dengan jumlah pengajuan SKCK yang sebenarnya
  const sktmCounter = 30; // Ganti dengan jumlah pengajuan SKTM yang sebenarnya
  const izinCounter = 20; // Ganti dengan jumlah pengajuan Surat Izin yang sebenarnya
  const kematianCounter = 10; // Ganti dengan jumlah pengajuan Surat Keterangan Kematian yang sebenarnya
  const gajiCounter = 5; // Ganti dengan jumlah pengajuan Surat Keterangan Gaji yang sebenarnya

  // Update nilai counter
  document.getElementById('skckCounter').setAttribute('data-purecounter-end', skckCounter);
  document.getElementById('sktmCounter').setAttribute('data-purecounter-end', sktmCounter);
  document.getElementById('izinCounter').setAttribute('data-purecounter-end', izinCounter);
  document.getElementById('kematianCounter').setAttribute('data-purecounter-end', kematianCounter);
  document.getElementById('gajiCounter').setAttribute('data-purecounter-end', gajiCounter);
</script>


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
            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
              <h3>Surat Keterangan Adat Istiadat: Kepribadian Terhormat dan Tidak Tersangkut Perkara Polisi</h3>
              <p class="fst-italic">
                Surat keterangan ini diberikan kepada warga desa yang memiliki perilaku terhormat dan tidak pernah tersangkut dalam perkara polisi seperti mencuri, main judi, memakai narkoba, pembunuhan, pemerkosaan, dan pelanggaran hukum serius lainnya.
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Merupakan individu yang menjunjung tinggi nilai-nilai adat istiadat desa.</li>
                <li><i class="ri-check-double-line"></i> Tidak pernah terlibat dalam tindakan kriminal seperti mencuri, main judi, atau menggunakan narkoba.</li>
                <li><i class="ri-check-double-line"></i> Mempunyai reputasi sebagai warga desa yang dapat diandalkan dan patuh pada norma-norma sosial.</li>
              </ul>
              <p>
                Surat keterangan ini ditujukan untuk memberikan apresiasi dan pengakuan terhadap perilaku baik dan kontribusi positif yang telah diberikan oleh warga desa. Semoga surat ini dapat menjadi bukti nyata dari komitmen warga desa dalam menjaga keamanan, ketertiban, dan keharmonisan lingkungan.
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
              <h3>Surat Keterangan Tidak Mampu: Untuk Masyarakat Dengan Kondisi Ekonomi Tidak Berkecukupan</h3>
              <p class="fst-italic">
                Surat Keterangan Tidak Mampu adalah dokumen resmi yang dikeluarkan oleh pemerintah untuk menunjukkan bahwa seseorang tidak mampu secara finansial untuk melaksanakan suatu kewajiban atau kegiatan tertentu. Dokumen ini sering kali diperlukan untuk mendapatkan bantuan sosial, pendaftaran sekolah, atau keperluan administratif lainnya.
              </p>
              <p class="fst-italic">
                Surat ini dikeluarkan berdasarkan kondisi keuangan dan sosial dari pihak yang memohon.
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Surat ini membantu pihak berwenang untuk mengetahui kondisi finansial seseorang.</li>
                <li><i class="ri-check-double-line"></i> Dokumen ini bisa diperlukan untuk mendapatkan bantuan dari pemerintah atau lembaga sosial lainnya.</li>
                <li><i class="ri-check-double-line"></i> Pemohon harus memberikan informasi yang jujur terkait kondisi finansialnya.</li>
                <li><i class="ri-check-double-line"></i> Surat ini memiliki masa berlaku tertentu dan mungkin memerlukan perpanjangan jika masih dibutuhkan.</li>
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
                Surat izin tidak masuk kerja merupakan suatu tindakan yang diambil ketika seseorang tidak dapat hadir dalam pekerjaan dalam jangka waktu tertentu. Dokumen ini berfungsi sebagai pemberitahuan resmi kepada atasan mengenai alasan ketidakhadiran dan memberikan klarifikasi terkait hal tersebut.
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Surat ini berisi penjelasan rinci mengenai alasan tidak bisa hadir, seperti sakit, urusan keluarga, atau keadaan darurat lainnya.</li>
                <li><i class="ri-check-double-line"></i> Penggunaan surat izin ini bertujuan agar atasan memiliki pemahaman yang jelas tentang situasi yang dihadapi oleh individu tersebut.</li>
                <li><i class="ri-check-double-line"></i> Dokumen ini juga dapat digunakan sebagai bukti resmi jika diperlukan.</li>
              </ul>
              <p class="fst-italic">
                Surat izin tidak masuk kerja membantu menciptakan komunikasi yang efektif antara individu dan pihak yang berwenang, memberikan pengertian terhadap keadaan yang dihadapi, dan menjaga transparansi dalam hubungan pekerjaan.
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
                Surat Keterangan Kematian adalah dokumen resmi yang dikeluarkan oleh pemerintah atau instansi yang berwenang untuk memberikan informasi resmi terkait kematian seseorang. Dokumen ini biasanya diperlukan untuk keperluan administratif, penyelesaian harta warisan, klaim asuransi, dan proses lain yang melibatkan data kematian.
              </p>
              <p class="fst-italic">
                Surat ini berisi informasi penting seperti nama, tanggal kematian, dan tempat kematian.
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Surat ini diperlukan untuk mengurus administrasi terkait kematian seseorang.</li>
                <li><i class="ri-check-double-line"></i> Informasi yang akurat dan lengkap perlu disertakan dalam surat ini.</li>
                <li><i class="ri-check-double-line"></i> Dokumen ini dapat digunakan untuk berbagai proses hukum dan administratif.</li>
                <li><i class="ri-check-double-line"></i> Masyarakat umumnya membutuhkan surat keterangan kematian untuk menghindari masalah hukum dan administratif.</li>
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
                Surat Keterangan Gaji adalah dokumen yang diperlukan untuk memberikan informasi mengenai penghasilan atau pendapatan seorang individu dalam suatu periode waktu tertentu. Dokumen ini biasanya diperlukan dalam berbagai situasi seperti pendaftaran pinjaman, pembelian properti, atau keperluan administratif lainnya.
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Menyediakan informasi detil mengenai jumlah penghasilan atau pendapatan per bulan.</li>
                <li><i class="ri-check-double-line"></i> Digunakan untuk keperluan administratif seperti pendaftaran pinjaman atau pembelian properti.</li>
                <li><i class="ri-check-double-line"></i> Dapat diandalkan sebagai bukti penghasilan yang sah.</li>
              </ul>
              <p class="fst-italic">
                Surat ini membantu pihak yang membutuhkan informasi penghasilan untuk membuat keputusan yang tepat dalam proses administratif tertentu.
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

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Testimonials Section ======= -->
  <!-- <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Testimonials</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section> -->
  <!-- End Testimonials Section -->

  <!-- ======= Pricing Section ======= -->
  <!-- <section id="pricing" class="pricing section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Pricing</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="box" data-aos="fade-up" data-aos-delay="100">
            <h3>Free</h3>
            <h4><sup>$</sup>0<span> / month</span></h4>
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li class="na">Pharetra massa</li>
              <li class="na">Massa ultricies mi</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
          <div class="box featured" data-aos="fade-up" data-aos-delay="200">
            <h3>Business</h3>
            <h4><sup>$</sup>19<span> / month</span></h4>
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li>Pharetra massa</li>
              <li class="na">Massa ultricies mi</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="300">
            <h3>Developer</h3>
            <h4><sup>$</sup>29<span> / month</span></h4>
            <ul>
              <li>Aida dere</li>
              <li>Nec feugiat nisl</li>
              <li>Nulla at volutpat dola</li>
              <li>Pharetra massa</li>
              <li>Massa ultricies mi</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section> -->
  <!-- End Pricing Section -->

  <!-- ======= Frequently Asked Questions Section ======= -->
  <!-- <section id="faq" class="faq">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Frequently Asked Questions</h2>
      </div>

      <ul class="faq-list accordion" data-aos="fade-up">

        <li>
          <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
          <div id="faq1" class="collapse" data-bs-parent=".faq-list">
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>
        </li>

        <li>
          <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
          <div id="faq2" class="collapse" data-bs-parent=".faq-list">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
            </p>
          </div>
        </li>

        <li>
          <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
          <div id="faq3" class="collapse" data-bs-parent=".faq-list">
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
            </p>
          </div>
        </li>

        <li>
          <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
          <div id="faq4" class="collapse" data-bs-parent=".faq-list">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
            </p>
          </div>
        </li>

        <li>
          <a data-bs-toggle="collapse" data-bs-target="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
          <div id="faq5" class="collapse" data-bs-parent=".faq-list">
            <p>
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
            </p>
          </div>
        </li>

        <li>
          <a data-bs-toggle="collapse" data-bs-target="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
          <div id="faq6" class="collapse" data-bs-parent=".faq-list">
            <p>
              Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
            </p>
          </div>
        </li>

      </ul>

    </div>
  </section> -->
  <!-- End Frequently Asked Questions Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Team</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>William Anderson</h4>
              <span>CTO</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Team Section -->
  <!-- ======= Contact Section ======= -->
  <!-- <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>info@example.com<br>contact@example.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section> -->
  <!-- End Contact Section -->

</main><!-- End #main -->
@endsection