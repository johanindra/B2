<div class="card-body">
    <h5 class="card-title">Tabel Laporan {{ $months[session('selected_month')] }} {{ session('selected_year') }}
    </h5>
    <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p> -->

    <!-- Filter untuk melihat laporan -->
    <div class="row mt-3">
        <div class="col-md-12 text-right">
            <form method="post" action="{{ route('laporan') }}" class="form-inline justify-content-end">
                @csrf
                <label for="filter_month">Pilih Bulan:</label>
                <select name="filter_month" id="filter_month" class="form-control mr-2">
                    @foreach ($months as $month_number => $month_name)
                        <option value="{{ $month_number }}"
                            {{ $month_number == session('selected_month') ? 'selected' : '' }}>{{ $month_name }}
                        </option>
                    @endforeach
                </select>

                <label for="filter_year">Pilih Tahun:</label>
                <select name="filter_year" id="filter_year" class="form-control mr-2">
                    @foreach ($years as $year)
                        <option value="{{ $year }}" {{ $year == session('selected_year') ? 'selected' : '' }}>
                            {{ $year }}</option>
                    @endforeach
                </select>

                <button type="submit" class="btn btn-primary">Lihat</button>
            </form>
        </div>
    </div>
    <!-- Filter tabel laporan -->


    <!-- Tabel laporan -->
    <div class="table-responsive" style="margin-top: 10px;">
        <table id="laporan" class="display table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NIK/NAMA</th>
                    <th>Nama Lengkap</th>
                    <th>Tipe Surat</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $cnt = 1; @endphp
                @if (isset($tabel))
                    @forelse ($tabel as $item)
                        <tr>
                            <td>{{ $cnt++ }}</td>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->kode_surat }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>
                                @if ($item->status === 'Selesai')
                                    <span class="badge bg-success">{{ $item->status }}</span>
                                @elseif($item->status === 'Masuk')
                                    <span class="badge bg-primary">{{ $item->status }}</span>
                                @elseif($item->status === 'Tolak')
                                    <span class="badge bg-danger">{{ $item->status }}</span>
                                @else
                                    {{ $item->status }}
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('detaillaporan') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <!-- Tambahkan input tersembunyi untuk id -->
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <input type="hidden" name="kode_surat" value="{{ $item->kode_surat }}">
                                    <button type="submit" class="btn btn-primary">Detail</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="7">{{ $pesan }}</td>
                        </tr>
                    @endforelse
                @else
                    <tr>
                        <td class="text-center" colspan="7">{{ $pesan }}</td>
                    </tr>
                @endif
            </tbody>
        </table>

    </div>
</div>
