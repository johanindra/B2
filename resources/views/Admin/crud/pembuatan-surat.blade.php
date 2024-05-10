<form method="post" action="{{ route('insertsurat') }}" id="pengajuan">

    @foreach ($errors->all() as $error)
        <div class="alert-danger"></div>
        <span class="text-danger">{{ $error }}</span>
    @endforeach

    @csrf

    <div class="mb-3">
        <label for="jenisSurat" class="form-label"><b>Jenis Surat</b></label>
        <select class="form-select" id="jenisSurat" name="jenisSurat" aria-label="Jenis Surat" onchange="showFields()">
            <option value="" {{ old('jenisSurat') === null ? 'selected' : '' }}>Pilih Jenis Surat</option>
            <option value="skck" {{ old('jenisSurat') === 'skck' ? 'selected' : '' }}>Pengantar SKCK</option>
            <option value="sktm" {{ old('jenisSurat') === 'sktm' ? 'selected' : '' }}>SKTM</option>
            <option value="surat_ijin" {{ old('jenisSurat') === 'surat_ijin' ? 'selected' : '' }}>Surat Izin</option>
            <option value="surat_kematian" {{ old('jenisSurat') === 'surat_kematian' ? 'selected' : '' }}>Surat Kematian
            </option>
            <option value="surat_penghasilan" {{ old('jenisSurat') === 'surat_penghasilan' ? 'selected' : '' }}>
                Keterangan Penghasilan</option>
        </select>
    </div>

    <div id="fieldsContainer">
    </div>

    <div class="mb-3" id="ttdcontainer" style="display: none;">
        <label for="mengetahui" class="form-label"><b>Mengetahui</b></label>
        <select class="form-select" id="mengetahui" name="mengetahui" aria-label="Yang bertanda tangan">
            <option selected>Yang bertanda tangan</option>
            <option value="kepaladesa">Kepala Desa</option>
            <option value="carik">Sekertaris Desa</option>
        </select>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary ">Simpan dan
                Cetak</button>
            <button type="submit" formaction="{{ route('previewsurat') }}" formmethod="POST" formtarget="_blank"
                class="btn btn-warning">Preview</button>
        </div>
    </div>

    <script>
        const form = document.getElementById('pengajuan');
        const fieldsContainer = document.getElementById('fieldsContainer');
        const ttdcontainer = document.getElementById('ttdcontainer');
        const jenisSuratSelect = document.getElementById('jenisSurat');
    
        // Set the selected jenisSurat option and trigger the change event
        const formData = new FormData(form);
        const selectedJenisSurat = formData.get('jenisSurat');
        jenisSuratSelect.value = selectedJenisSurat;
        jenisSuratSelect.dispatchEvent(new Event('change'));
    
        // Add an event listener to the jenisSurat select element
        jenisSuratSelect.addEventListener('change', showFields);
    
        // Define the showFields function
        function showFields() {
            const jenisSurat = jenisSuratSelect.value;
    
            // Clear the fields container
            fieldsContainer.innerHTML = '';
    
            // Show/hide the ttd container
            if (jenisSurat) {
                ttdcontainer.style.display = 'block';
            } else {
                ttdcontainer.style.display = 'none';
            }
    
            // Add the appropriate form fields based on the selected jenisSurat
            switch (jenisSurat) {
                case "skck":
                    fieldsContainer.innerHTML = `
                        @include('Admin.pembuatan-surat.skck')
                    `;
                    break;
                case "sktm":
                    fieldsContainer.innerHTML = `
                        @include('Admin.pembuatan-surat.sktm')
                    `;
                    break;
                case "surat_ijin":
                    fieldsContainer.innerHTML = `
                        @include('Admin.pembuatan-surat.surat-ijin')
                    `;
                    break;
                case "surat_kematian":
                    fieldsContainer.innerHTML = `
                        @include('Admin.pembuatan-surat.surat-mati')
                    `;
                    break;
                case "surat_penghasilan":
                    fieldsContainer.innerHTML = `
                        @include('Admin.pembuatan-surat.surat-penghasilan')
                    `;
                    break;
                default:
                    // Clear the fields container
                    fieldsContainer.innerHTML = '';
                    break;
            }
        }

        // Handle form submission
        // form.addEventListener('submit', (event) => {
        //     // Prevent default form submission
        //     event.preventDefault();

        //     // Get the form data
        //     const formData = new FormData(form);

        //     // Send the form data to the server using fetch
        //     fetch('{{ route('insertsurat') }}', {
        //             method: 'POST',
        //             body: formData
        //         })
        //         .then(response => response.json())
        //         .then(data => {
        //             // Handle the response from the server
        //             alert('Form submitted successfully!');
        //             // You can also redirect the user to a new page or perform other actions here
        //         })
        //         .catch(error => {
        //             // Handle any errors that occur during the request
        //             alert('Error submitting form: ' + error.message);
        //             // You can also display an error message to the user or perform other actions here
        //         });
        // });
    </script>
</form>
