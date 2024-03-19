<form>
    <div class="mb-3">
        <label for="jenisSurat" class="form-label"><b>Jenis Surat</b></label>
        <select class="form-select" id="jenisSurat" aria-label="Jenis Surat" onchange="showFields()">
            <option selected>Pilih Jenis Surat</option>
            <option value="pengantar_SKCK">Pengantar SKCK</option>
            <option value="SKTM">SKTM</option>
            <option value="surat_izin">Surat Izin</option>
            <option value="surat_kematian">Surat Kematian</option>
            <option value="slip_gaji">Keterangan Penghasilan</option>
        </select>
    </div>
    <div id="fieldsContainer">
        <!-- Fields will be displayed here -->
    </div>
    <div class="mb-3 text-right" id="submitBtn">
        <button type="submit" class="btn btn-primary">Buat</button>
        <button type="reset" class="btn btn-danger" onclick="clearForm()">Hapus</button>
    </div>
</form>