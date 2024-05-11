<div class="mb-3">
    <label for="nama" class="form-label"><b>Nama</b></label>
    <input type="text" class="form-control" id="nama" name="nama" required
    oninput="this.value = this.value.replace(/[^a-zA-Z ]/g, '');">
</div>
<div class="mb-3">
    <label for="jenis_kelamin" class="form-label"><b>Jenis Kelamin</b></label>
    <select class="form-select" id="jenis_kelamin" aria-label="Jenis Kelamin" name="jenis_kelamin">

        <option selected>Pilih Jenis Kelamin</option>
        <option value="laki-laki">Laki-laki</option>
        <option value="perempuan">Perempuan</option>
    </select>
</div>
<div class="mb-3">
    <label for="alamat" class="form-label"><b>Alamat</b></label>
    <input type="text" class="form-control" id="alamat" name="alamat" required
    oninput="this.value = this.value.replace(/[^a-zA-Z0-9,. ]/g, '');">
</div>
<div class="mb-3">
    <label for="tanggal_kematian" class="form-label"><b>Tanggal Kematian</b></label>
    <input type="date" class="form-control" id="tanggal_kematian" name="tanggal_kematian" required
    {{-- oninput="this.value = this.value.replace(/[^a-zA-Z ]/g, '');"> --}}

</div>
