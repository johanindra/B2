<div class="col-12">
    <div class="card recent-sales overflow-auto">

        <div class="card-body">
            <h5 class="card-title">Laporan Bulan Ini</span></h5>

            <table class="table table-borderless datatable">
                <thead>
                    <tr>
                        <td><b>Nama Lengkap</b></td>
                        <td><b>Jenis Surat</b></td>
                        <td><b>Tanggal Selesai</b></td>
                        <td><b>Status</b></td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($tabel as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->Keterangan }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>
                                @if ($item->status === 'Selesai')
                                    <span class="badge bg-success">{{ $item->status }}</span>
                                @elseif($item->status === 'Masuk')
                                    <span class="badge bg-primary">{{ $item->status }}</span>
                                @else
                                    {{ $item->status }}
                                @endif
                            </td>
                        </tr>
                    @endforeach

                </tbody>
                <script>
                    $(document).ready(function() {
                        $('.datatable').DataTable({
                            searching: false // menghilangkan fitur pencarian
                        });
                    });
                </script>
                
            </table>

        </div>

    </div>
</div>
