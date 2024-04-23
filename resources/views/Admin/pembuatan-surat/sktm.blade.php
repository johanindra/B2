<label><b>Data Ayah :</b></label>
<div class="mb-3">
    <label for="namaBapak" class="form-label"><b>Nama Lengkap</b></label>
    <input type="text" class="form-control" id="namaBapak" required>
</div>
<div class="mb-3">
    <label for="tempatLahirBapak" class="form-label"><b>Tempat Lahir</b></label>
    <input type="text" class="form-control" id="tempatLahirBapak" required>
</div>
<div class="mb-3">
    <label for="tanggalLahirBapak" class="form-label"><b>Tanggal Lahir</b></label>
    <input type="date" class="form-control" id="tanggalLahirBapak" required>
</div>
<div class="mb-3">
    <label for="pekerjaanBapak" class="form-label"><b>Pekerjaan</b></label>
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
    <label for="alamatBapak" class="form-label"><b>Alamat</b></label>
    <input type="text" class="form-control" id="alamatBapak" required>
</div>
<br>
<label><b>Data Ibu :</b></label>
<div class="mb-3">
    <label for="namaIbu" class="form-label"><b>Nama lengkap</b></label>
    <input type="text" class="form-control" id="namaIbu" required>
</div>
<div class="mb-3">
    <label for="tempatLahirIbu" class="form-label"><b>Tempat Lahir</b></label>
    <input type="text" class="form-control" id="tempatLahirIbu" required>
</div>
<div class="mb-3">
    <label for="tanggalLahirIbu" class="form-label"><b>Tanggal Lahir</b></label>
    <input type="date" class="form-control" id="tanggalLahirIbu" required>
</div>
<div class="mb-3">
    <label for="pekerjaanIbu" class="form-label"><b>Pekerjaan</b></label>
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
    <label for="alamatIbu" class="form-label"><b>Alamat</b></label>
    <input type="text" class="form-control" id="alamatIbu" required>
</div>
<br>
<label><b>Data Anak :</b></label>
<div class="mb-3">
    <label for="namaAnak" class="form-label"><b>Nama Lengkap</b></label>
    <input type="text" class="form-control" id="namaAnak" required>
</div>
<div class="mb-3">
    <label for="tempatLahirAnak" class="form-label"><b>Tempat Lahir</b></label>
    <input type="text" class="form-control" id="tempatLahirAnak" required>
</div>
<div class="mb-3">
    <label for="tanggalLahirAnak" class="form-label"><b>Tanggal Lahir</b></label>
    <input type="date" class="form-control" id="tanggalLahirAnak" required>
</div>
<div class="mb-3">
    <label for="jenisKelaminAnak" class="form-label"><b>Jenis Kelamin</b></label>
    <select class="form-select" id="jenisKelaminAnak" aria-label="Jenis Kelamin Anak">
        <option selected>Pilih Jenis Kelamin Anak</option>
        <option value="laki-laki">Laki-laki</option>
        <option value="perempuan">Perempuan</option>
    </select>
</div>
<div class="mb-3">
    <label for="alamatAnak" class="form-label"><b>Alamat</b></label>
    <input type="text" class="form-control" id="alamatAnak" required>
</div>
