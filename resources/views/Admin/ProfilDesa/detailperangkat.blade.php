{{-- <div class="card" id="kepalaDesa">
    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
        <h2>Prayogay</h2>
        <h3>Kepala Desa Pesudukuh</h3>
        <!-- <div class="social-links mt-2">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div> -->
    </div>
</div>

<div class="card" id="sekretarisDesa">
    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
        <h2>Prayogay</h2>
        <h3>Sekretaris Desa Pesudukuh</h3>
        <!-- <div class="social-links mt-2">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div> -->
    </div>
</div>

<div class="card" id="bendaharaDesa">
    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
        <h2>Prayogay</h2>
        <h3>Bendahara Desa Pesudukuh</h3>
        <!-- <div class="social-links mt-2">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div> -->
    </div>
</div> --}}
@foreach($nama as $nama)
<div class="card">
    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
        <h2>{{$nama->nama }}</h2>
        <h3>{{$nama->pangkat}}</h3>
       
    </div>
</div>
@endforeach
