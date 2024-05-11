<div class="mb-3">
    <label for="nama_lengkap" class="form-label"><b>Nama Lengkap</b></label>
    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required
    oninput="this.value = this.value.replace(/[^a-zA-Z ]/g, '');">
</div>
<div class="mb-3">
    <label for="nik" class="form-label"><b>NIK</b></label>
    <input type="text" class="form-control" id="nik" name="nik" required>
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
    <label for="tempat_lahir" class="form-label"><b>Tempat Tanggal Lahir</b></label>
    <div class="row">
    <input type="text" class="form-control col ms-3 me-3" id="tempat_lahir" name="tempat_lahir" required
    oninput="this.value = this.value.replace(/[^a-zA-Z ]/g, '');">
    <input type="date" class="form-control col me-3" id="tanggal_lahir" name="tanggal_lahir" required>
</div>
</div>
{{-- <div class="mb-3">
    <label for="tanggal_lahir" class="form-label"><b>Tanggal Lahir</b></label>
    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
</div> --}}
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
    oninput="this.value = this.value.replace(/[^a-zA-Z ]/g, '');">
</div>
<div class="mb-3">
    <label for="alamat" class="form-label"><b>Alamat</b></label>
    <input type="text" class="form-control" id="alamat" name="alamat" required
    oninput="this.value = this.value.replace(/[^a-zA-Z0-9,. ]/g, '');">
</div>
<div class="mb-3">
    <label for="jumlah_penghasilan" class="form-label"><b>Jumlah Penghasilan</b></label>
    <input type="text" class="form-control" id="jumlah_penghasilan" name="jumlah_penghasilan" required
    placeholder="Isi tanpa titik" oninput="this.value = this.value.replace(/[^0-9 ]/g, '');">
</div>
<div class="mb-3">
    <label for="kegunaan_surat" class="form-label"><b>Kegunaan Surat</b></label>
    <input type="text" class="form-control" id="kegunaan_surat" name="kegunaan_surat" required
    oninput="this.value = this.value.replace(/[^a-zA-Z0-9,. ]/g, '');">
</div>