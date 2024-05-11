<div class="mb-3">
    <label for="nik" class="form-label"><b>NIK</b></label>
    <input type="number" class="form-control" id="nik" name="nik"  required>
</div>
<div class="mb-3">
    <label for="nama" class="form-label"><b>Nama Lengkap</b></label>
    <input type="text" class="form-control" id="nama" name="nama" required 
    oninput="this.value = this.value.replace(/[^a-zA-Z ]/g, '');">
</div>
<div class="mb-3">
    <label for="tempat_tgl_lahir" class="form-label"><b>Tempat, Tanggal  Lahir</b></label>
    <input type="text" class="form-control" id="tempat_tgl_lahir" name="tempat_tgl_lahir" required
    oninput="this.value = this.value.replace(/[^a-zA-Z0-9, ]/g, '');">
</div>
{{-- <div class="mb-3">
    <label for="tanggalLahir" class="form-label"><b>Tanggal Lahir</b></label>
    <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" required>
</div> --}}
<div class="mb-3">
    <label for="kebangsaan" class="form-label"><b>Kewarganegaraan</b></label>
    <input type="text" class="form-control" id="kebangsaan" name="kebangsaan" required
    oninput="this.value = this.value.replace(/[^a-zA-Z ]/g, '');">
</div>
<div class="mb-3">
    <label for="agama" class="form-label"><b>Agama</b></label>
    <select class="form-select" id="agama" name="agama" aria-label="Agama">

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
    <label for="jenis_kelamin" class="form-label"><b>Jenis Kelamin</b></label>
    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" aria-label="Jenis Kelamin">

        <option selected>Pilih Jenis Kelamin</option>
        <option value="laki-laki">Laki-laki</option>
        <option value="perempuan">Perempuan</option>
    </select>
</div>
<div class="mb-3">
    <label for="status_perkawinan" class="form-label"><b>Status Perkawinan</b></label>
    <select class="form-select" id="status_perkawinan" name="status_perkawinan" aria-label="Status Perkawinan">

        <option selected>Pilih Status Perkawinan</option>
        <option value="Belum Kawin">Belum Kawin</option>
        <option value="Sudah Kawin">Sudah Kawin</option>
        <option value="Cerai Mati">Cerai Mati</option>
    </select>
</div>
<div class="mb-3">
    <label for="pekerjaan" class="form-label"><b>Pekerjaan</b></label>

    <select class="form-select" id="pekerjaan" name="pekerjaan" required onchange="checkOther()">

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
    <input type="text" class="form-control" id="otherPekerjaan" name="otherPekerjaan"
    oninput="this.value = this.value.replace(/[^a-zA-Z0-9 ]/g, '');">
</div>
<div class="mb-3">
    <label for="tempat_tinggal" class="form-label"><b>Tempat Tinggal</b></label>
    <input type="text" class="form-control" id="tempat_tinggal" name="tempat_tinggal" required
    oninput="this.value = this.value.replace(/[^a-zA-Z0-9 ]/g, '');">
</div>
<br>

