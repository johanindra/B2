@extends('layout')
@section('content')
    <!-- Breadcrumbs -->
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li>Detail Agenda</li>
            </ol>
            <h2>{{ $agenda->judul }}</h2>
        </div>
    </section>

    <!-- Detail Agenda -->
    <section class="portfolio-details">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8">
                    <div class="portfolio-details-slider">
                        <img src="{{ asset('assets/img/agenda/' . $agenda->foto) }}" class="img-fluid" alt="{{ $agenda->judul }}">
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Informasi Agenda</h3>
                        <ul>
                            <li><strong>Nama Agenda</strong>: {{ $agenda->judul }}</li>
                            <li><strong>Tanggal Agenda</strong>: {{ $agenda->tanggal }}</li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>Deskripsi Agenda</h2>
                        <p>{{ $agenda->isi }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>   
    @endsection
