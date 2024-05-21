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
            <img src="{{ url('/foto_kelengkapan/'.$photo = $detail_surat->foto_ktp ?? $detail_surat->foto_kk ?? '') }}" alt="Foto Persyaratan"
                class="img-thumbnail" width="200" height="200">
            <br>
            {{-- <div class="text-center "><b>KTP</b></div> --}}
        </button>

    </div>
    <br><br>


    <form method="post" action="{{ route('ceksurat') }}">
        @csrf
        <div class="mb-3">
            <label for="mengetahui" class="form-label"><b>Mengetahui :</b></label>
            <select class="form-select" id="mengetahui" name="mengetahui" aria-label="mengetahui ttd"
                onchange="showFields()">
                <option value="" selected>Pilih yang bertanda tangan</option>
                <option value="kepaladesa">Kepala Desa</option>
                <option value="carik">Sekretaris Desa</option>
            </select>
        </div>
        <div>
            <div class="text-right" id="buttonGroup">
                <!-- jika mau tolak  style="display: none;" -->
                <input id="no_pengajuan" name="no_pengajuan" value="{{ $detail_surat->no_pengajuan }}" type="hidden">
                <input id="kode_surat" name="kode_surat" value="{{ $detail_surat->kode_surat }}" type="hidden">
                <button type="submit" name="print" class="btn btn-primary">Cetak</button>
                {{-- <button type="submit" name="preview" class="btn btn-warning text-white">Preview</button> --}}
                <button type="submit" formaction="{{ route('ceksuratpreview') }}" formmethod="POST" formtarget="_blank"
                    class="btn btn-warning">Preview</button>
                <button type="button" class="btn btn-danger" onclick="showRejectReasonPrompt({{$detail_surat->no_pengajuan}}, 
            '{{$detail_surat->kode_surat}}')">Tolak</button>
            </div>
    </form>


    <!-- Modal untuk Perbesar Foto -->
    <!-- Modal template -->
<div class="modal fade" id="modalFoto" tabindex="-1" role="dialog" aria-labelledby="modalFotoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalFotoLabel">Foto Kelengkapan Persyaratan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="{{ url('/foto_kelengkapan/'.$photo = $detail_surat->foto_ktp ?? $detail_surat->foto_kk ?? '') }}" alt="Foto Persyaratan" class="img-fluid" width="100%" height="auto">
                <br>
                {{-- <div class="text-center "><b>KTP</b></div> --}}
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
    function showRejectReasonPrompt(no_pengajuan, kode_surat) {
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
            preConfirm: (alasan) => {
                // Lakukan sesuatu dengan alasan penolakan, misalnya mengirimkan ke server
                // Di sini Anda dapat menambahkan kode AJAX untuk mengirim alasan penolakan ke server
                // Misalnya, Anda dapat mengirim alasan ke URL tertentu menggunakan AJAX
                return fetch('/api/tolak-detail', {
                        method: 'POST',
                        body: JSON.stringify({
                            no_pengajuan: no_pengajuan,
                            alasan: alasan,
                            kode_surat: kode_surat // Menggunakan parameter alasan
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
                        // return response.json();
                        location.reload();
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

    showFields();
</script>
