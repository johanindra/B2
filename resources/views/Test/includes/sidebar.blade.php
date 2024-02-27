<div class="navigation">
    <ul>
        <li>
            <a href="#">
                <span class="icon">
                    <!-- <ion-icon name="logo-apple"></ion-icon> -->
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo E-LaDes">
                </span>
                <span class="title">E-LaDes</span>
            </a>
        </li>

        <li>
            <a href="{{ url('/dashboard') }}">
                <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title">Dashboard</span>
            </a>
        </li>

        <li>
            <a href="{{ url('/pengajuan') }}">
                <span class="icon">
                    <ion-icon name="mail-outline"></ion-icon>
                </span>
                <span class="title">Pengajuan Surat</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon">
                    <ion-icon name="create-outline"></ion-icon>
                </span>
                <span class="title">Pembuatan Surat</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon">
                    <ion-icon name="documents-outline"></ion-icon>
                </span>
                <span class="title">Laporan</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon">
                    <ion-icon name="people-outline"></ion-icon>
                </span>
                <span class="title">Profil Desa</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon">
                    <ion-icon name="newspaper-outline"></ion-icon>
                </span>
                <span class="title">Kabar Desa</span>
            </a>
        </li>

        <li>
            <a href="{{ url('/home') }}">
                <span class="icon">
                    <ion-icon name="log-out-outline"></ion-icon>
                </span>
                <span class="title">Keluar</span>
            </a>
        </li>
    </ul>
</div>