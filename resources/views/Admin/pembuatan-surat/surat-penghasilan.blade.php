<div class="mb-3">
    <label for="nama" class="form-label"><b>Nama Lengkap</b></label>
    <input type="text" class="form-control" id="nama" required>
</div>
<div class="mb-3">
    <label for="nik" class="form-label"><b>NIK</b></label>
    <input type="text" class="form-control" id="nik" required>
</div>
<div class="mb-3">
    <label for="jenisKelamin" class="form-label"><b>Jenis Kelamin</b></label>
    <select class="form-select" id="jenisKelamin" aria-label="Jenis Kelamin">
        <option selected>Pilih Jenis Kelamin</option>
        <option value="laki-laki">Laki-laki</option>
        <option value="perempuan">Perempuan</option>
    </select>
</div>
<div class="mb-3">
    <label for="tempatLahir" class="form-label"><b>Tempat Lahir</b></label>
    <input type="text" class="form-control" id="tempatLahir" required>
</div>
<div class="mb-3">
    <label for="tanggalLahir" class="form-label"><b>Tanggal Lahir</b></label>
    <input type="date" class="form-control" id="tanggalLahir" required>
</div>
<div class="mb-3">
    <label for="pekerjaan" class="form-label"><b>Pekerjaan</b></label>
    <select class="form-select" id="pekerjaan" required onchange="checkOther()">
        <option value="" selected>Pilih Pekerjaan</option>
        <option value="PNS">PNS (Pegawai Negeri Sipil)</option>
        <option value="Wiraswasta">Wiraswasta</option>
        <option value="Petani">Petani</option>
        <option value="Pedagang">Pedagang</option>
        <option value="Karyawan Swasta">Karyawan Swasta</option>
        <option value="Pegawai BUMN">Pegawai BUMN (Badan Usaha Milik Negara)</option>
        <option value="Guru/Dosen">Guru/Dosen</option>
        <option value="Mahasiswa">Mahasiswa</option>
        <option value="Pelajar">Pelajar</option>
        <option value="Buruh">Buruh</option>
        <option value="Polisi/TNI">Polisi/TNI (Tentara Nasional Indonesia)</option>
        <option value="Dokter">Dokter</option>
        <option value="Perawat">Perawat</option>
        <option value="Nelayan">Nelayan</option>
        <option value="Tukang Bangunan">Tukang Bangunan</option>
        <option value="Pekerja Kantoran">Pekerja Kantoran</option>
        <!-- Tambahkan pekerjaan lainnya jika diperlukan -->
        <option value="Lainnya">Lainnya</option>
    </select>
</div>
<div class="mb-3" id="otherJob" style="display: none;">
    <label for="otherPekerjaan" class="form-label"><b>Pekerjaan Lainnya</b></label>
    <input type="text" class="form-control" id="otherPekerjaan">
</div>
<div class="mb-3">
    <label for="alamat" class="form-label"><b>Alamat</b></label>
    <input type="text" class="form-control" id="alamat" required>
</div>
<div class="mb-3">
    <label for="penghasilan" class="form-label"><b>Jumlah Penghasilan</b></label>
    <input type="text" class="form-control" id="penghasilan" required>
</div>
<div class="mb-3">
    <label for="kegunaan" class="form-label"><b>Kegunaan Surat</b></label>
    <input type="text" class="form-control" id="kegunaan" required>
</div>  
