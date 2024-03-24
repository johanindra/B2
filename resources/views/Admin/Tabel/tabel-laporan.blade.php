<div class="card-body">
    <h5 class="card-title">Tabel Laporan</h5>
    <!-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p> -->

    <!-- Filter utuk melihat laporan -->
    <div class="row mt-3">
        <div class="col-md-12 text-right">
            <form method="post" class="form-inline justify-content-end">
                <label for="filter_month">Pilih Bulan:</label>
                <select name="filter_month" id="filter_month" class="form-control mr-2">
                    <?php
                    // Mendapatkan bulan saat ini
                    $current_month = date('m');
                    // Daftar nama bulan
                    $months = [
                        '01' => 'Januari',
                        '02' => 'Februari',
                        '03' => 'Maret',
                        '04' => 'April',
                        '05' => 'Mei',
                        '06' => 'Juni',
                        '07' => 'Juli',
                        '08' => 'Agustus',
                        '09' => 'September',
                        '10' => 'Oktober',
                        '11' => 'November',
                        '12' => 'Desember',
                    ];
                    
                    foreach ($months as $month_number => $month_name) {
                        $selected = $current_month == $month_number ? 'selected' : '';
                        echo "<option value='$month_number' $selected>$month_name</option>";
                    }
                    ?>
                </select>


                <label for="filter_year">Pilih Tahun:</label>
                <select name="filter_year" id="filter_year" class="form-control mr-2">
                    <?php
                    // Mendapatkan tahun saat ini
                    $current_year = date('Y');
                    // Membuat opsi tahun dari tahun saat ini hingga 10 tahun ke belakang
                    for ($year = $current_year; $year >= $current_year - 10; $year--) {
                        echo "<option value='$year'>$year</option>";
                    }
                    ?>
                </select>

                <button type="submit" class="btn btn-primary">Lihat</button><br>
            </form>
        </div>
    </div>
    <!-- filter tabel laporan -->


    <!-- tabel laporan -->
    <div class="table-responsive" style="margin-top: 10px;">
        <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
            <!-- Tabel Anda di sini -->
            <thead>
                <tr>
                    <th>#</th>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Tipe Surat</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $cnt = 1;
                @endphp
                @foreach ($tabel as $item)
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
                            <form action="{{ route('pengajuansurat') }}" method="POST">
                                @csrf
                                @method('POST')

                                <!-- Add a hidden input field for the id -->
                                <input type="hidden" name="id" value="{{ $item->id }}">

                                <button type="submit" class="btn btn-primary">
                                    Detail
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
