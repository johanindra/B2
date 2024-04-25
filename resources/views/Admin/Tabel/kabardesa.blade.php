<div class="card-body">
    <h5 class="card-title">Agenda Desa Pesudukuh</h5>

    <div class="text-right">
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tambahAgendaModal">Tambah</a>
    </div>
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        {{ $error }} <br />
        @endforeach
    </div>
    @endif
    <div class="table-responsive" style="margin-top: 10px;">
        <table id="kabardesa" class="display table table-striped table-bordered" cellspacing="0" width="100%">
            <!-- Tabel Anda di sini -->
            <thead>
                <tr>
                    <th width="1%">#</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th width="1%">Foto</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kabar_desa as $g)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$g->judul}}</td>
                    <td>{{$g->tanggal}}</td>
                    <td><img width="150px" src="{{ url('/data_foto_berita/'.$g->foto) }}"></td>
                    <td class="">
                        <form action="" method="post">
                            <input name="id" id="id" type="hidden" value="{{ $g->id_berita}}">
                            <a href="{{ route('detail.kabar', ['id' => $g->id_berita]) }}" class="btn btn-sm btn-primary">Detail</a>
                            <a class="btn btn-sm btn-danger" href="#" onclick="confirmDelete('/upload/hapus/{{ $g->id_berita }}')">HAPUS</a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('Admin.crud.kabardesa')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    // Tambahkan event listener untuk setiap tombol Hapus
    function confirmDelete(url) {
        Swal.fire({
            title: 'Yakin ingin menghapus?',
            text: "Anda tidak akan dapat mengembalikan data ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika konfirmasi, arahkan pengguna ke URL hapus
                window.location = url;
            }
        });
    }
</script>

@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',
        });
    </script>
@endif
@if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session('error') }}',
        });
    </script>
@endif
