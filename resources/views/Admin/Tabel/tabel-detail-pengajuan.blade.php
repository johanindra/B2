<div class="card-body">
    <h5 class="card-title">Tabel Detail Pengajuan Surat</h5>
    <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p> -->

    <div class="panel-body p-20" style="margin-top: 10px;">
        <table id="example" class="table table-bordered" cellspacing="0" width="100%">
            <!-- Tabel Anda di sini -->
            <tr>
                <th>ID Pengajuan</th>
                <td>1</td>
            </tr>
            <tr>
                <th>NIK</th>
                <td>1234567890123456</td>
            </tr>
            <tr>
                <th>Nama Lengkap</th>
                <td>prayogay</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>dsn pugruk</td>
            </tr>
            <tr>
                <th>RT/RW</th>
                <td>01/01</td>
            </tr>
            <!-- tambahono -->
        </table>
    </div>

    <!-- foto kelengkapan -->
    <div class="mt-5">
        <h5 class="card-title">Foto Kelengkapan Persyaratan</h5>
        <img src="assets/img/foto perangkat desa.jpg" alt="Foto Persyaratan" class="img-thumbnail" width="200" height="200">
        <br>
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalFoto">Lihat Foto</button>
    </div>
    <br><br>

    <form method="post">
        <div class="mb-3">
            <label for="mengetahui" class="form-label"><b>Mengetahui :</b></label>
            <select class="form-select" id="mengetahui" aria-label="mengetahui ttd" onchange="showFields()">
                <option value="" selected disabled>Pilih yang bertanda tangan</option>
                <option value="Kepala Desa">Kepala Desa</option>
                <option value="Sekretaris Desa">Sekretaris Desa</option>
            </select>
        </div>
        <div class="text-right" id="buttonGroup" style="display: none;">
            <button type="submit" name="print" class="btn btn-primary">Cetak</button>
            <button type="submit" name="preview" class="btn btn-warning text-white">Preview</button>
        </div>
    </form>


    <!-- Modal untuk Perbesar Foto -->
    <div class="modal fade" id="modalFoto" tabindex="-1" role="dialog" aria-labelledby="modalFotoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalFotoLabel">Foto Kelengkapan Persyaratan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body center-image">
                    <img src="assets/img/foto perangkat desa.jpg" alt="Foto Persyaratan" class="img-thumbnail">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showFields() {
            var selectElement = document.getElementById("mengetahui");
            var buttonGroup = document.getElementById("buttonGroup");

            if (selectElement.value === "" || selectElement.value === "Pilih yang bertanda tangan") {
                buttonGroup.style.display = "none"; // Sembunyikan tombol jika pilihan tidak valid
            } else {
                buttonGroup.style.display = "block"; // Tampilkan tombol jika pilihan valid
            }
        }
    </script>


</div>