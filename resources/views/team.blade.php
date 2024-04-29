@extends('layout') <!-- Pastikan untuk mengganti dengan layout yang digunakan -->

@section('content')
<section id="team" class="team_member section-padding">
    <div class="container">                
        <div class="section-title text-center">
            <h1>Struktur Pemerintahan Desa</h1>
            <p>Berikut adalah struktur pemerintahan desa kami.</p>
        </div>                
        <div class="row text-center">
            @foreach($struktur as $anggota)
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                    <div class="our-team">
                        <div class="team_img">
                            <img src="{{ asset('assets/img/team/team-1.jpg') }}" alt="Profil {{ $anggota->nama }}">
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
@endsection
