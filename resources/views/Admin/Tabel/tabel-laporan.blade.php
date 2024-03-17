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
                    $months = array(
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
                        '12' => 'Desember'
                    );

                    foreach ($months as $month_number => $month_name) {
                        $selected = ($current_month == $month_number) ? 'selected' : '';
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
                    <th>tanggal Pengajuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $cnt = 1;
                // Mulai looping data di sini
                // Misalkan Anda memiliki array $data yang berisi data untuk ditampilkan
                // foreach ($data as $row) {
                ?>
                <tr>
                    <td><?php echo htmlentities($cnt); ?></td>
                    <td>1234567891</td>
                    <td>Pugruk</td>
                    <td>Surat Kematian</td>
                    <td>21-02-2024</td>
                    <td class="text-center">
                        <a href="detail-laporan" class="btn btn-sm btn-primary">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo htmlentities($cnt + 1); ?></td>
                    <td>1234567892</td>
                    <td>Abdul</td>
                    <td>Perizinan</td>
                    <td>21-02-2024</td>
                    <td class="text-center">
                        <a href="detail-laporan" class="btn btn-sm btn-primary">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo htmlentities($cnt + 2); ?></td>
                    <td>1234567893</td>
                    <td>Agus</td>
                    <td>Pengantar SKCK</td>
                    <td>21-02-2024</td>
                    <td class="text-center">
                        <a href="detail-laporan" class="btn btn-sm btn-primary">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo htmlentities($cnt + 3); ?></td>
                    <td>1234567894</td>
                    <td>Abdi</td>
                    <td>SKTM</td>
                    <td>21-02-2024</td>
                    <td class="text-center">
                        <a href="detail-laporan" class="btn btn-sm btn-primary">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo htmlentities($cnt + 4); ?></td>
                    <td>1234567894</td>
                    <td>Abdi</td>
                    <td>SKTM</td>
                    <td>21-02-2024</td>
                    <td class="text-center">
                        <a href="detail-laporan" class="btn btn-sm btn-primary">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo htmlentities($cnt + 5); ?></td>
                    <td>1234567894</td>
                    <td>Abdi</td>
                    <td>SKTM</td>
                    <td>21-02-2024</td>
                    <td class="text-center">
                        <a href="detail-laporan" class="btn btn-sm btn-primary">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo htmlentities($cnt + 6); ?></td>
                    <td>1234567894</td>
                    <td>Abdi</td>
                    <td>SKTM</td>
                    <td>21-02-2024</td>
                    <td class="text-center">
                        <a href="detail-laporan" class="btn btn-sm btn-primary">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo htmlentities($cnt + 7); ?></td>
                    <td>1234567894</td>
                    <td>Abdi</td>
                    <td>SKTM</td>
                    <td>21-02-2024</td>
                    <td class="text-center">
                        <a href="detail-laporan" class="btn btn-sm btn-primary">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo htmlentities($cnt + 8); ?></td>
                    <td>1234567894</td>
                    <td>Abdi</td>
                    <td>SKTM</td>
                    <td>21-02-2024</td>
                    <td class="text-center">
                        <a href="detail-laporan" class="btn btn-sm btn-primary">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo htmlentities($cnt + 9); ?></td>
                    <td>1234567894</td>
                    <td>Abdi</td>
                    <td>SKTM</td>
                    <td>21-02-2024</td>
                    <td class="text-center">
                        <a href="detail-laporan" class="btn btn-sm btn-primary">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo htmlentities($cnt + 10); ?></td>
                    <td>1234567894</td>
                    <td>Abdi</td>
                    <td>SKTM</td>
                    <td>21-02-2024</td>
                    <td class="text-center">
                        <a href="detail-laporan" class="btn btn-sm btn-primary">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo htmlentities($cnt + 11); ?></td>
                    <td>1234567894</td>
                    <td>Abdi</td>
                    <td>SKTM</td>
                    <td>21-02-2024</td>
                    <td class="text-center">
                        <a href="detail-laporan" class="btn btn-sm btn-primary">Detail</a>
                    </td>
                </tr>
                <?php
                // }
                // Akhir dari loop data
                ?>
            </tbody>
        </table>
    </div>
</div>