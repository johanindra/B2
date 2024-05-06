
<form method="post" id="form">

    @csrf
    <div class="mb-3">
        <label for="jenisSurat" class="form-label"><b>Jenis Surat</b></label>
        <select class="form-select" id="jenisSurat" name="jenisSurat" aria-label="Jenis Surat" onchange="showFields()">
            <option value="" selected>Pilih Jenis Surat</option>
            <option value="skck">Pengantar SKCK</option>
            <option value="sktm">SKTM</option>
            <option value="surat_ijin">Surat Izin</option>
            <option value="surat_kematian">Surat Kematian</option>

            <option value="surat_penghasilan">Keterangan Penghasilan</option>
        </select>
    </div>
    <div id="fieldsContainer">
    </div>
    <script>
        function showFields() {
            var jenisSurat = document.getElementById("jenisSurat").value;
            var fieldsContainer = document.getElementById("fieldsContainer");
            var formContent = "";

            // Hapus semua elemen form yang ada di dalam fieldsContainer
            while (fieldsContainer.firstChild) {
                fieldsContainer.removeChild(fieldsContainer.firstChild);
            }

            // Tambahkan form yang sesuai berdasarkan pilihan
            switch (jenisSurat) {
                case "skck":
                    formContent = `
                        <form id="skckForm">
                            @include('Admin.pembuatan-surat.skck')
                        </form>
                    `;
                    break;
                case "sktm":
                    formContent = `
                        <form id="SKTMForm">
                            @include('Admin.pembuatan-surat.sktm')
                        </form>
                    `;
                    break;
                case "surat_ijin":
                    formContent = `
                        <form id="suratIzinForm">
                            @include('Admin.pembuatan-surat.surat-ijin')
                        </form>
                    `;
                    break;
                case "surat_kematian":
                    formContent = `
                        <form id="suratKematianForm">
                            @include('Admin.pembuatan-surat.surat-mati')
                        </form>
                    `;
                    break;
                case "surat_penghasilan":
                    formContent = `
                        <form id="suratPenghasilanForm">
                            @include('Admin.pembuatan-surat.surat-penghasilan')
                        </form>
                    `;
                    break;
                default:
                    // Kosongkan formContent jika tidak ada pilihan yang dipilih
                    break;
                    }
            // Tambahkan formContent ke dalam fieldsContainer
            fieldsContainer.innerHTML = formContent;


            var ttd = document.getElementById("ttdcontainer");

            if (jenisSurat) {
                ttd.style.display = 'block';
            }
        }
    </script>
    {{-- <div class="mb-3 text-right" id="submitBtn">
        <button type="submit" class="btn btn-primary">Buat</button>
        <button type="reset" class="btn btn-danger" onclick="clearForm()">Hapus</button>
    </div> --}}
    <div class="mb-3 " id="ttdcontainer" style="display: none;">
        <label for="mengetahui" class="form-label"><b>Mengetahui</b></label>
        <select class="form-select" id="mengetahui" name="mengetahui" aria-label="Yang bertanda tangan">
            <option selected>Yang bertanda tangan</option>
            <option value="kepaladesa">Kepala Desa</option>
            <option value="carik">Sekertaris Desa</option>
        </select>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary " formaction="{{ route('insertsurat') }}">Simpan dan
                Cetak</button>
            {{-- <button type="submit" formaction="{{ route('previewsurat') }}"
                target="_blank" class="btn btn-warning ">Preview</button> --}}
            {{-- <button type="submit" onclick="openNewTab('{{ route('previewsurat') }}')"
                class="btn btn-warning ">Preview</button> --}}
            <button type="submit" formaction="{{route('previewsurat')}}" formmethod="POST" formtarget="_blank" class="btn btn-warning">Preview</button>
            <script>
                function openPreview() {
                    // Ambil URL pratinjau dari route previewsurat
                    var previewUrl = '{{ route("previewsurat") }}';
            
                    // Kumpulkan data formulir yang diisi
                    var formData = new FormData(document.getElementById('form'));
            
                    // Buat sebuah objek XMLHTTPRequest
                    var xhr = new XMLHttpRequest();
            
                    // Tetapkan tindakan yang akan dilakukan saat permintaan selesai
                    xhr.onload = function () {
                        // Periksa apakah permintaan selesai dan status OK
                        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                            // Buka pratinjau dalam tab baru jika permintaan berhasil
                            window.open(previewUrl, '_blank');
                        } else {
                            // Tampilkan pesan kesalahan jika permintaan gagal
                            console.error('Gagal membuka pratinjau.');
                        }
                    };
            
                    // Buka koneksi dan kirim data formulir sebagai permintaan POST
                    xhr.open('POST', previewUrl);
                    xhr.send(formData);
                }
            </script>
            
            
        </div>
    </div>
</form>
