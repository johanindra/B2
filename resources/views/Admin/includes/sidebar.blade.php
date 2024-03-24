  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">E-Layang Desa</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


  </header><!-- End Header -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="dashboard">
                <i class="bi bi-house-door"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link " href="pengajuan">
                <i class="bi bi-envelope"></i>
                <span>Pengajuan Surat</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link " href="pembuatan-surat">
                <i class="bi bi-pencil"></i>
                <span>Pembuatan Surat</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link " href="laporan">
                <i class="bi bi-file-text"></i>
                <span>laporan</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link " href="profil-desa">
                <i class="bi bi-people"></i>
                <span>Profil Desa</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link " href="kabar-desa">
                <i class="bi bi-newspaper"></i>
                <span>kabar Desa</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            {{-- @auth --}}
            <form action="{{ route('logout') }}" method="post" class="nav-link">
                @csrf
                <button type="submit" >
                    <i class="bi bi-arrow-right "></i>
                    <span>keluar</span>
                </button>
            </form>
            {{-- @endauth --}}
        </li>
    </ul>

</aside><!-- End Sidebar-->