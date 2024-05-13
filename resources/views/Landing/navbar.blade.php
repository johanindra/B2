<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <a href="" class="logo me-auto"><img src="{{ asset('assets/img/lPemerintah2.png') }}" alt="logo"></a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ url('/') }}">Beranda</a></li>
                <li><a class="nav-link scrollto" href="{{ url(('/') . '#services') }}">Visi-Misi</a></li>
                <li><a class="nav-link scrollto" href="{{ url(('/') . '#about') }}">Tentang</a></li>
                <li><a class="nav-link scrollto" href="{{ url(('/') . '#portfolio') }}">Pengumuman</a></li>
                <li><a class="nav-link scrollto" href="{{ url(('/') . '#team') }}">Susunan Pemerintahan</a></li>
                <li><a class="nav-link scrollto" href="{{ url(('/') . '#footer') }}">Kontak</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>



        <a href="{{ url('/login') }}" class="get-started-btn scrollto">Login</a>
    </div>
</header><!-- End Header -->