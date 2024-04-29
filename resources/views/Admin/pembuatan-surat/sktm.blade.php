<label><b>Data Ayah :</b></label>
<div class="mb-3">
    <label for="nama_bapak" class="form-label"><b>Nama Lengkap</b></label>
    <input type="text" class="form-control" id="nama_bapak" name="nama_bapak" required>
</div>
<div class="mb-3">
    <label for="tempat_tanggal_lahir_bapak" class="form-label"><b>Tempat Lahir</b></label>
    <input type="text" class="form-control" id="tempat_tanggal_lahir_bapak" name="tempat_tanggal_lahir_bapak" required>
</div>
<div class="mb-3">
    <label for="pekerjaan_bapak" class="form-label"><b>Pekerjaan</b></label>
    <select class="form-select" id="pekerjaan_bapak" name="pekerjaan_bapak" required onchange="checkOther()">
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
        <option value="Lainnya">Lainnya</option>
    </select>
</div>
<div class="mb-3" id="otherJob" style="display: none;">
    <label for="otherPekerjaan" class="form-label"><b>Pekerjaan Lainnya</b></label>
    <input type="text" class="form-control" id="otherPekerjaan" name="otherPekerjaan">
</div>
<div class="mb-3">
    <label for="alamat_bapak" class="form-label"><b>Alamat</b></label>
    <input type="text" class="form-control" id="alamat_bapak" name="alamat_bapak" required>
</div>
<br>
<label><b>Data Ibu :</b></label>
<div class="mb-3">
    <label for="nama_ibu" class="form-label"><b>Nama lengkap</b></label>
    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" required>
</div>
<div class="mb-3">
    <label for="tempat_tanggal_lahir_ibu" class="form-label"><b>Tempat Lahir</b></label>
    <input type="text" class="form-control" id="tempat_tanggal_lahir_ibu" name="tempat_tanggal_lahir_ibu" required>
</div>
<div class="mb-3">
    <label for="pekerjaan_ibu" class="form-label"><b>Pekerjaan</b></label>
    <select class="form-select" id="pekerjaan_ibu" name="pekerjaan_ibu" required onchange="checkOther()">
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
        <option value="Lainnya">Lainnya</option>
    </select>
</div>
<div class="mb-3" id="otherJob" style="display: none;">
    <label for="otherPekerjaan" class="form-label"><b>Pekerjaan Lainnya</b></label>
    <input type="text" class="form-control" id="otherPekerjaan" name="otherPekerjaan">
</div>
<div class="mb-3">
    <label for="alamat_ibu" class="form-label"><b>Alamat</b></label>
    <input type="text" class="form-control" id="alamat_ibu" name="alamat_ibu" required>
</div>
<br>
<label><b>Data Anak :</b></label>
<div class="mb-3">
    <label for="nama_anak" class="form-label"><b>Nama Lengkap</b></label>
    <input type="text" class="form-control" id="nama_anak" name="nama_anak" required>
</div>
<div class="mb-3">
    <label for="tempat_tanggal_lahir_anak" class="form-label"><b>Tempat Lahir</b></label>
    <input type="text" class="form-control" id="tempat_tanggal_lahir_anak" name="tempat_tanggal_lahir_anak" required>
</div>
<div class="mb-3">
    <label for="jenis_kelamin" class="form-label"><b>Jenis Kelamin</b></label>
    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" aria-label="Jenis Kelamin Anak">
        <option selected>Pilih Jenis Kelamin Anak</option>
        <option value="laki-laki">Laki-laki</option>
        <option value="perempuan">Perempuan</option>
    </select>
</div>
<div class="mb-3">
    <label for="alamat_anak" class="form-label"><b>Alamat</b></label>
    <input type="text" class="form-control" id="alamat_anak" name="alamat_anak" required>
</div>
