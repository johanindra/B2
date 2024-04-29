// resources/views/visi-misi.blade.php
@extends('layout')

@section('content')
<!-- Services Section -->
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Visi Misi Desa Pesudukuh</h2>
            <h3>Sambutan Kepala Desa Pesudukuh</h3>
            <p>
                Kami senang Anda sudah berkunjung, semoga melalui situs web ini kami dapat memberikan segala kemudahan dalam pengajuan surat - surat kepada pemerintah desa kami.
                <br><br>Romi Yumiani, Kepala Desa Pesudukuh
            </p>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <i class="bi bi-briefcase"></i>
                    <h4><a href="#">Visi Desa Pesudukuh</a></h4>
                    <p>{{ $visi->isi }}</p> <!-- Menampilkan isi Visi -->
                </div>
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-card-checklist"></i>
                    <h4><a href="#">Misi Desa Pesudukuh</a></h4>
                    <p>{{ $misi->isi }}</p> <!-- Menampilkan isi Misi -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Section -->
@endsection
