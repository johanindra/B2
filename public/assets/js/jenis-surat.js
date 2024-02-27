// untuk id jika sama bisa di ganti

function showFields() {
    var jenisSurat = document.getElementById("jenisSurat").value;
    var fieldsContainer = document.getElementById("fieldsContainer");
    var fieldsToShow = "";
    var dynamicTable = document.getElementById("dynamicTable");
    var tableContent = "";

    if (jenisSurat === "pengantar_SKCK") {
        fieldsToShow = `
            <div class="mb-3">
                <label for="nik" class="form-label"><b>NIK</b></label>
                <input type="text" class="form-control" id="nik" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label"><b>Nama Lengkap</b></label>
                <input type="text" class="form-control" id="nama" required>
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
                <label for="kewarganegaraan" class="form-label"><b>Kewarganegaraan</b></label>
                <input type="text" class="form-control" id="kewarganegaraan" required>
            </div>
            <div class="mb-3">
                <label for="agama" class="form-label"><b>Agama</b></label>
                <select class="form-select" id="agama" aria-label="Agama">
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
                <label for="jenisKelamin" class="form-label"><b>Jenis Kelamin</b></label>
                <select class="form-select" id="jenisKelamin" aria-label="Jenis Kelamin">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="statusPerkawinan" class="form-label"><b>Status Perkawinan</b></label>
                <select class="form-select" id="statusPerkawinan" aria-label="Status Perkawinan">
                    <option selected>Pilih Status Perkawinan</option>
                    <option value="belum_kawin">Belum Kawin</option>
                    <option value="sudah_kawin">Sudah Kawin</option>
                    <option value="cerai_mati">Cerai Mati</option>
                </select>
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
                <label for="tempatTinggal" class="form-label"><b>Tempat Tinggal</b></label>
                <input type="text" class="form-control" id="tempatTinggal" required>
            </div>
            <br>
            <div class="mb-3">
                <label for="mengetahui" class="form-label"><b>Mengetahui</b></label>
                <select class="form-select" id="mengetahuittd" aria-label="Yang bertanda tangan">
                    <option selected>Yang bertanda tangan</option>
                    <option value="kades">Kepala Desa</option>
                    <option value="sekertaris">Sekertaruat Desa</option>
                </select>
            </div>
        `;
    } else if (jenisSurat === "SKTM") {
        fieldsToShow = `
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
            <br>
            <div class="mb-3">
                <label for="mengetahui" class="form-label"><b>Mengetahui</b></label>
                <select class="form-select" id="mengetahuittd" aria-label="Yang bertanda tangan">
                    <option selected>Yang bertanda tangan</option>
                    <option value="kades">Kepala Desa</option>
                    <option value="sekertaris">Sekertaruat Desa</option>
                </select>
            </div>
        `;
    } else if (jenisSurat === "surat_izin") {
        fieldsToShow = `
            <div class="mb-3">
                <label for="nik" class="form-label"><b>NIK</b></label>
                <input type="text" class="form-control" id="nik" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label"><b>Nama Lengkap</b></label>
                <input type="text" class="form-control" id="nama" required>
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
                <label for="kewarganegaraan" class="form-label"><b>Kewarganegaraan</b></label>
                <input type="text" class="form-control" id="kewarganegaraan" required>
            </div>
            <div class="mb-3">
                <label for="agama" class="form-label"><b>Agama</b></label>
                <select class="form-select" id="agama" aria-label="Agama">
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
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label"><b>Alamat</b></label>
                <input type="text" class="form-control" id="alamat" required>
            </div>
            <div class="mb-3">
                <label for="tempatKerja" class="form-label"><b>Tempat Kerja</b></label>
                <input type="text" class="form-control" id="tempatKerja" required>
            </div>
            <div class="mb-3">
                <label for="bagian" class="form-label"><b>Bagian</b></label>
                <input type="text" class="form-control" id="bagian" required>
            </div>
            <br>
            <div class="mb-3">
                <label for="mengetahui" class="form-label"><b>Mengetahui</b></label>
                <select class="form-select" id="mengetahuittd" aria-label="Yang bertanda tangan">
                    <option selected>Yang bertanda tangan</option>
                    <option value="kades">Kepala Desa</option>
                    <option value="sekertaris">Sekertariat Desa</option>
                </select>
            </div>
        `;
    } else if (jenisSurat === "surat_kematian") {
        fieldsToShow = `
            <div class="mb-3">
                <label for="nama_kematian" class="form-label"><b>Nama</b></label>
                <input type="text" class="form-control" id="namaKematian" required>
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
                <label for="alamatBapak" class="form-label"><b>Alamat</b></label>
                <input type="text" class="form-control" id="alamatBapak" required>
            </div>
            <div class="mb-3">
                <label for="tanggalLahirBapak" class="form-label"><b>Tanggal Kematian</b></label>
                <input type="date" class="form-control" id="tanggalLahirBapak" required>
            </div>
            <br>
            <div class="mb-3">
                <label for="mengetahui" class="form-label"><b>Mengetahui</b></label>
                <select class="form-select" id="mengetahuittd" aria-label="Yang bertanda tangan">
                    <option selected>Yang bertanda tangan</option>
                    <option value="kades">Kepala Desa</option>
                    <option value="sekertaris">Sekertaruat Desa</option>
                </select>
            </div>
        `;
    } else if (jenisSurat === "slip_gaji") {
        fieldsToShow = `
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
            <br>
            <div class="mb-3">
                <label for="mengetahui" class="form-label"><b>Mengetahui</b></label>
                <select class="form-select" id="mengetahuittd" aria-label="Yang bertanda tangan">
                    <option selected>Yang bertanda tangan</option>
                    <option value="kades">Kepala Desa</option>
                    <option value="sekertaris">Sekertaruat Desa</option>
                </select>
            </div>
        `;
    } else {
        // Hide all fields if no option is selected
        fieldsToShow = "";
    }

    fieldsContainer.innerHTML = fieldsToShow;

    // tampilan surat
    if (jenisSurat !== "Pilih Jenis Surat") {
        document.getElementById("submitBtn").style.display = "block"; //untuk buttonsubmit
        document.getElementById("previewSuratContainer").style.display =
            "block"; //untuk tampilan
    } else {
        document.getElementById("submitBtn").style.display = "none"; //untuk button submin
        document.getElementById("previewSuratContainer").style.display = "none"; //untuk tampilan
    }
    if (jenisSurat === "pengantar_SKCK") {
        tableContent = `
        <tr>
            <th>Jenis Surat</th>
            <td><b>Pengantar SKCK</b></td>
        </tr>
            <tr>
                <th>NIK</th>
                <td>isian NIK</td>
            </tr>
            <tr>
                <th>Nama Lengkap</th>
                <td>isian nama lengkap</td>
            </tr>
            <tr>
                <th>Tempat & Tanggal Lahir</th>
                <td>isian tempat & tanggal lahir</td>
            </tr>
            <tr>
                <th>Kewarganegaraan</th>
                <td>isian kewarganegaraan</td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>isian gama</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>isian jenis kelamin</td>
            </tr>
            <tr>
                <th>Status Perkawinan</th>
                <td>isian status perkawinan</td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td>isian pekerjaan</td>
            </tr>
            <tr>
                <th>Tempat Tinggal</th>
                <td>isian tempat tinggal</td>
            </tr>
        `;
    } else if (jenisSurat === "SKTM") {
        tableContent = `
        <tr>
            <th>Jenis Surat</th>
            <td><b>SKTM</b></td>
        </tr>
            <tr>
                <th>Nama Ayah</th>
                <td>isian nama ayah</td>
            </tr>
            <tr>
                <th>Tempat & Tanggal Lahir</th>
                <td>isian tempat tanggal lahir</td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td>isian pekerjaan</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>isian alamat</td>
            </tr>
            <tr>
                <th>Nama Ibu</th>
                <td>isian nama ibu</td>
            </tr>
            <tr>
                <th>Tempat & Tanggal Lahir</th>
                <td>isian tempat tanggal lahir</td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td>isian pekerjaan</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>isian alamat</td>
            </tr>
            <tr>
                <th>Nama Lengkap</th>
                <td>isian nama lengkap</td>
            </tr>
            <tr>
                <th>Tempat & Tanggal Lahir</th>
                <td>isian tempat tanggal lahir</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>isian jenis kelamin</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>isian alamat</td>
            </tr>
        `;
    } else if (jenisSurat === "surat_izin") {
        tableContent = `
            <tr>
                <th>Jenis Surat</th>
                <td><b>Surat Izin</b></td>
            </tr>
            <tr>
                <th>NIK</th>
                <td>isian nik</td>
            </tr>
            <tr>
                <th>Nama Lengkap</th>
                <td>isian nama lengkap</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>isian jenis kelamin</td>
            </tr>
            <tr>
                <th>Tempat & Tanggal lahir</th>
                <td>isian tempat tanggal lahir</td>
            </tr>
            <tr>
                <th>Kewarganegaraan</th>
                <td>isian kewarganegaraan</td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>isian agama</td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td>isian pekerjaan</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>isian alamat</td>
            </tr>
            <tr>
                <th>Tempat Kerja</th>
                <td>isian tempat kerja</td>
            </tr>
            <tr>
                <th>Bagian</th>
                <td>isian bagian</td>
            </tr>
        `;
    } else if (jenisSurat === "surat_kematian") {
        tableContent = `
            <tr>
                <th>Jenis Surat</th>
                <td><b>Surat Kematian</b></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>isian nama</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>isian jenis kelamin</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>isian alamat</td>
            </tr>
            <tr>
                <th>Tanggal Kematian</th>
                <td>isian tanggal kematian</td>
            </tr>
        `;
    } else if (jenisSurat === "slip_gaji") {
        tableContent = `
            <tr>
                <th>Jenis Surat</th>
                <td><b>Keterangan penghasilan</b></td>
            </tr>
            <tr>
                <th>Nama lengkap</th>
                <td>isian nama</td>
            </tr>
            <tr>
                <th>NIK</th>
                <td>isian NIK</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>isian jenis kelamin</td>
            </tr>
            <tr>
                <th>Tempat & Tanggal Lahir / Umur</th>
                <td>isian ttl / umur</td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td>isian pekerjaann</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>isian alamat</td>
            </tr>
            <tr>
                <th>Penghasilan</th>
                <td>isian penghasilan</td>
            </tr>
            <tr>
                <th>Kegunaan Surat</th>
                <td>isian kegunaan surat</td>
            </tr>
        `;
    } else {
        // Hide all fields if no option is selected
        tableContent = "";
    }

    dynamicTable.innerHTML = tableContent;
}

// cek pekerjaan
function checkOther() {
    var pekerjaanSelect = document.getElementById("pekerjaan");
    var otherJobDiv = document.getElementById("otherJob");
    var otherPekerjaanInput = document.getElementById("otherPekerjaan");

    if (pekerjaanSelect.value === "Lainnya") {
        otherJobDiv.style.display = "block";
        otherPekerjaanInput.required = true;
    } else {
        otherJobDiv.style.display = "none";
        otherPekerjaanInput.required = false;
    }
}

// fungsi button
// button refresh
function clearForm() {
    document.getElementById("myForm").reset();
}
