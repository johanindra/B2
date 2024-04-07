<div class="card-body">
    <h5 class="card-title">Tabel Detail Pengajuan Surat</h5>
    <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p> -->

    <div class="panel-body p-20" style="margin-top: 10px;">
        <table id="example" class="table table-bordered table-striped-columns" cellspacing="0" width="100%">
            @if ($detail_surat)
                <tbody>
                    @foreach ($detail_surat->toArray() as $columnName => $value)
                        <tr>
                            <td style="width: 40%;"><strong>{{ $columnName }}</strong></td>
                            <td>{{ $value }}</td>
                        </tr>
                    @endforeach
                </tbody>
            @else
                <p>Detail surat tidak ditemukan</p>
            @endif
        </table>
    </div>
        

    <!-- foto kelengkapan -->
    <div class="mt-5">
        <h5 class="card-title">Foto Kelengkapan Persyaratan</h5>
        <button type="button " class="btn btn-secondary" data-toggle="modal" data-target="#modalFoto">
            <img src="assets/img/foto perangkat desa.jpg" alt="Foto Persyaratan" class="img-thumbnail" width="200" height="200" >
            <br>
            <div class="text-center "><b>KTP</b></div>
        </button>
        
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
        <div>
            <div class="text-right" id="buttonGroup">
                <!-- jika mau tolak  style="display: none;" -->
                <button type="submit" name="print" class="btn btn-primary">Cetak</button>
                <button type="submit" name="preview" class="btn btn-warning text-white">Preview</button>
                <button type="button" class="btn btn-danger" onclick="showRejectReasonPrompt()">Tolak</button>
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
                    <a type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</a>
                </div>
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


    // Fungsi untuk menampilkan popup konfirmasi SweetAlert2 dengan input teks
    function showRejectReasonPrompt() {
        Swal.fire({
            title: 'Masukkan alasan penolakan:',
            input: 'text',
            inputAttributes: {
                autocapitalize: 'off'
            },
            showCancelButton: true,
            confirmButtonText: 'Kirim',
            cancelButtonText: 'Batal',
            showLoaderOnConfirm: true,
            preConfirm: (rejectReason) => {
                // Lakukan sesuatu dengan alasan penolakan, misalnya mengirimkan ke server
                // Di sini Anda dapat menambahkan kode AJAX untuk mengirim alasan penolakan ke server
                // Misalnya, Anda dapat mengirim alasan ke URL tertentu menggunakan AJAX
                return fetch('/path-to-your-api-endpoint', {
                        method: 'POST',
                        body: JSON.stringify({
                            rejectReason: rejectReason
                        }),
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Jika menggunakan Laravel, untuk CSRF token
                        },
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(response.statusText);
                        }
                        return response.json();
                    })
                    .catch(error => {
                        Swal.showValidationMessage(
                            `Request failed: ${error}`
                        );
                    });
            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            if (result.isConfirmed) {
                // Tampilkan notifikasi bahwa alasan penolakan telah dikirim
                Swal.fire(
                    'Sukses!',
                    'Alasan penolakan telah dikirim.',
                    'success'
                );
            }
        });
    }
</script>