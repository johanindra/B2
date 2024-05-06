<div class="mb-3">
    <label for="Nik" class="form-label"><b>NIK</b></label>

    <input type="text" class="form-control" id="Nik" required>
</div>
<div class="mb-3">
    <label for="Nama" class="form-label"><b>Nama Lengkap</b></label>
    <input type="text" class="form-control" id="Nama" required>
</div>
<div class="mb-3">
    <label for="Jenis_kelamin" class="form-label"><b>Jenis Kelamin</b></label>
    <select class="form-select" id="Jenis_kelamin" aria-label="Jenis Kelamin">

        <option selected>Pilih Jenis Kelamin</option>
        <option value="laki-laki">Laki-laki</option>
        <option value="perempuan">Perempuan</option>
    </select>
</div>
<div class="mb-3">

    <label for="Tempat_tanggal_lahir" class="form-label"><b>Tempat Lahir</b></label>
    <input type="text" class="form-control" id="Tempat_tanggal_lahir" required>
</div>
{{-- <div class="mb-3">
    <label for="tanggalLahir" class="form-label"><b>Tanggal Lahir</b></label>
    <input type="date" class="form-control" id="tanggalLahir" required>

</div> --}}
<div class="mb-3">
    <label for="kewarganegaraan" class="form-label"><b>Kewarganegaraan</b></label>
    <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" required>
</div>
<div class="mb-3">
    <label for="Agama" class="form-label"><b>Agama</b></label>
    <select class="form-select" id="Agama" name="Agama" aria-label="Agama">
        <option selected>Pilih Agama</option>
        <option value="islam">Islam</option>
        <option value="kristen">Kristen</option>
        <option value="katolik">Katolik</option>
        <option value="hindu">Hindu</option>
        <option value="budha">Budha</option>
        <option value="konghucu">Konghucu</option>
    </select>
</div>
<div class="mb-3">
    <label for="Pekerjaan" class="form-label"><b>Pekerjaan</b></label>
    <select class="form-select" id="Pekerjaan" name="Pekerjaan" required onchange="checkOther()">
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
        <!-- Tambahkan Pekerjaan lainnya jika diperlukan -->
        <option value="Lainnya">Lainnya</option>
    </select>
</div>
<div class="mb-3" id="otherJob" style="display: none;">
    <label for="otherPekerjaan" class="form-label"><b>Pekerjaan Lainnya</b></label>
    <input type="text" class="form-control" id="otherPekerjaan" name="otherPekerjaan">
</div>
<div class="mb-3">
    <label for="Alamat" class="form-label"><b>Alamat</b></label>
    <input type="text" class="form-control" id="Alamat" name="Alamat" required>
</div>
<div class="mb-3">
    <label for="Tempat_Kerja" class="form-label"><b>Tempat Kerja</b></label>
    <input type="text" class="form-control" id="Tempat_Kerja" name="Tempat_Kerja" required>
</div>
<div class="mb-3">
    <label for="Bagian" class="form-label"><b>Bagian</b></label>
    <input type="text" class="form-control" id="Bagian" name="Bagian" required>
</div>
<div class="mb-3">
    <label for="Tanggal" class="form-label"><b>Tanggal Izin</b></label>
    <input type="text" class="form-control" id="Tanggal" name="Tanggal" required>
</div>
<div class="mb-3">
    <label for="Alasan" class="form-label"><b>Alasan</b></label>
    <input type="text" class="form-control" id="Alasan" name="Alasan" required>
</div>