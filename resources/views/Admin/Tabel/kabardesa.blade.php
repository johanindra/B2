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
                    <th>#</th>
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
                    <td><img width="150px" src="{{ url('/data_file/'.$g->file) }}"></td>
                    <td class="text-center">
                        <a href="detail-kabar" class="btn btn-sm btn-primary">Detail</a>
                        <a class="btn btn-sm btn-danger" href="#" onclick="confirmDelete('/upload/hapus/{{ $g->id }}')">HAPUS</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
            <!-- <thead>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody> -->
            <?php
            $cnt = 1;
            // Mulai looping data di sini
            // Misalkan Anda memiliki array $data yang berisi data untuk ditampilkan
            // foreach ($data as $row) {
            ?>
            <!-- <tr>
                    <td><?php echo htmlentities($cnt); ?></td>
                    <td>Grebeg Suro Desa Pesudukuh</td>
                    <td>20-03-2024</td>
                    <td>30-03-2024</td>
                    <td>
                        <img src="assets/img/slides-3.jpg" class="d-block w-100" alt="..." height="100" width="100">
                    </td>
                    <td class="text-center">
                        <a href="detail-kabar" class="btn btn-sm btn-primary">Detail</a>
                        <a href="" class="btn btn-sm btn-success">Selesai</a>
                    </td>
                </tr> -->
            <?php
            // }
            // Akhir dari loop data
            ?>
            </tbody>
        </table>
    </div>
</div>

@include('Admin.crud.kabardesa')

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