<div class="card-body">
    <h5 class="card-title">Tabel Pengajuan Surat</h5>
    <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p> -->

    <div class="table-responsive" style="margin-top: 10px;">
        <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
            <!-- Tabel Anda di sini -->
            <thead>
                <tr>
                    <th>#</th>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Tipe Surat</th>
                    <th>tanggal Pengajuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                $cnt = 1;
                @endphp
                @foreach($tabel as $item)
                
                <tr>
                    @php
                        // dd($item);
                    @endphp
                    <td>{{ $cnt++}}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->kode_surat }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>
                        <form action="
                        {{ route('detailpengajuan') }}
                        " method="POST">
                            @csrf
                            @method('POST')
            
                            <!-- Add a hidden input field for the id -->
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <input type="hidden" name="kode_surat" value="{{ $item->kode_surat }}">
            
                            <button type="submit" class="btn btn-primary">
                                Detail
                            </button>
                            
                        <a href="#" class="btn btn-m btn-danger" onclick="showRejectReasonPrompt({{$item->id}})">Tolak</a>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


<script>
    function showRejectReasonPrompt(id) {
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
                return fetch('/api/tolak', {
                        method: 'POST',
                        body: JSON.stringify({
                            id: id,
                            alasan: alasan, // Menggunakan parameter alasan
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
</script>
