@php
    $pattern = "/(?<!\d)\d+\./";
    $misi_poin = preg_split($pattern, $misi);

    $misi_poin = array_filter(array_map('trim', $misi_poin));
    $misi_poin = array_values(array_unique($misi_poin)); 
@endphp

@extends('layout')

@section('content')
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
                    <i class="bi bi-briefcase"></i>
                    <h4><a href="#">Visi Desa Pesudukuh</a></h4>
                    <p>{{ $visi }}</p>
                </div>
            </div>

            <div class="col-md-6 mt-4 mt-md-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-card-checklist"></i>
                    <h4><a href="#">Misi Desa Pesudukuh</a></h4>

                    @foreach($misi_poin as $index => $poin)
                        <p>{{ ($index + 1) . '. ' . $poin }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
