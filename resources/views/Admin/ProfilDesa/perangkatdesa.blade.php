<!-- Di dalam file blade.php Anda -->
@if(session('updateperangkatdesa'))
    <div class="alert alert-success">
        {{ session('updateperangkatdesa') }}
    </div>
@endif

@if (session('errerrorupdateperangkator'))
    <div class="alert alert-danger">
        {{ session('errorupdateperangkat') }}
    </div>
@endif


<form action="{{ route('updateperangkat') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Kepala Desa -->
    <div class="row mb-3">
        <label for="nama_kepala_desa" class="col-md-4 col-form-label">Kepala Desa</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="nama_kepala_desa" name="nama[kepaladesa]"
                value="{{ $nama->where('id', 'kepaladesa')->first()->nama ?? '' }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="gambar_kepala_desa" class="col-md-4 col-form-label">Unggah Gambar Kepala Desa</label>
        <div class="col-md-8">
            <input type="file" class="form-control-file" id="gambar_kepala_desa" name="gambar[kepaladesa]">
        </div>
    </div>

    <!-- Sekretaris Desa -->
    <div class="row mb-3">
        <label for="nama_sekretaris_desa" class="col-md-4 col-form-label">Sekretaris Desa</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="nama_sekretaris_desa" name="nama[carik]"
                value="{{ $nama->where('id', 'carik')->first()->nama ?? '' }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="gambar_sekretaris_desa" class="col-md-4 col-form-label">Unggah Gambar Sekretaris Desa</label>
        <div class="col-md-8">
            <input type="file" class="form-control-file" id="gambar_sekretaris_desa" name="gambar[carik]">
        </div>
    </div>

    <!-- Bendahara -->
    <div class="row mb-3">
        <label for="nama_bendahara" class="col-md-4 col-form-label">Bendahara</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="nama_bendahara" name="nama[bendahara]"
                value="{{ $nama->where('id', 'bendahara')->first()->nama ?? '' }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="gambar_bendahara" class="col-md-4 col-form-label">Unggah Gambar Bendahara</label>
        <div class="col-md-8">
            <input type="file" class="form-control-file" id="gambar_bendahara" name="gambar[bendahara]">
        </div>
    </div>

    <!-- Kaur Umum -->
    <div class="row mb-3">
        <label for="nama_kaur_umum" class="col-md-4 col-form-label">Kaur Umum</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="nama_kaur_umum" name="nama[kaurumum]"
                value="{{ $nama->where('id', 'kaurumum')->first()->nama ?? '' }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="gambar_kaur_umum" class="col-md-4 col-form-label">Unggah Gambar Kaur Umum</label>
        <div class="col-md-8">
            <input type="file" class="form-control-file" id="gambar_kaur_umum" name="gambar[kaurumum]">
        </div>
    </div>

    <!-- Kasi Perencanaan -->
    <div class="row mb-3">
        <label for="nama_kaur_perencanaan" class="col-md-4 col-form-label">Kasi Perencanaan</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="nama_kaur_perencanaan" name="nama[kaurperencanaan]"
                value="{{ $nama->where('id', 'kaurperencanaan')->first()->nama ?? '' }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="gambar_kaur_perencanaan" class="col-md-4 col-form-label">Unggah Gambar Kasi Perencanaan</label>
        <div class="col-md-8">
            <input type="file" class="form-control-file" id="gambar_kaur_perencanaan" name="gambar[kaurperencanaan]">
        </div>
    </div>

    <!-- Kasi Pelayanan -->
    <div class="row mb-3">
        <label for="nama_kasi_pelayanan" class="col-md-4 col-form-label">Kasi Pelayanan</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="nama_kasi_pelayanan" name="nama[kasipelayanan]"
                value="{{ $nama->where('id', 'kasipelayanan')->first()->nama ?? '' }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="gambar_kasi_pelayanan" class="col-md-4 col-form-label">Unggah Gambar Kasi Pelayanan</label>
        <div class="col-md-8">
            <input type="file" class="form-control-file" id="gambar_kasi_pelayanan" name="gambar[kasipelayanan]">
        </div>
    </div>

    <!-- Kasi Kesejahteraan -->
    <div class="row mb-3">
        <label for="nama_kasi_kesejahteraan" class="col-md-4 col-form-label">Kasi Kesejahteraan</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="nama_kasi_kesejahteraan" name="nama[kasikesejahteraan]"
                value="{{ $nama->where('id', 'kasikesejahteraan')->first()->nama ?? '' }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="gambar_kasi_kesejahteraan" class="col-md-4 col-form-label">Unggah Gambar Kasi
            Kesejahteraan</label>
        <div class="col-md-8">
            <input type="file" class="form-control-file" id="gambar_kasi_kesejahteraan"
                name="gambar[kasikesejahteraan]">
        </div>
    </div>

    <!-- Kasi Pemerintahan -->
    <div class="row mb-3">
        <label for="nama_kasi_pemerintahan" class="col-md-4 col-form-label">Kasi Pemerintahan</label>
        <div class="col-md-8">
            <input type="text" class="form-control" id="nama_kasi_pemerintahan" name="nama[kasipemerintahan]"
                value="{{ $nama->where('id', 'kasipemerintahan')->first()->nama ?? '' }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="gambar_kasi_pemerintahan" class="col-md-4 col-form-label">Unggah Gambar Kasi Pemerintahan</label>
        <div class="col-md-8">
            <input type="file" class="form-control-file" id="gambar_kasi_pemerintahan"
                name="gambar[kasipemerintahan]">
        </div>
    </div>


    <!-- Tombol Submit -->
    <div class="row mb-3">
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</form>
