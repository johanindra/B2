<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Agenda Desa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/fontawesome/css/all.css">
</head>
<body>
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
    
    <!-- Kembali ke atas -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa fa-arrow-up"></i></a>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
