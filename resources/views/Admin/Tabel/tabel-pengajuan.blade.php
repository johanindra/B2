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
                        <a href="detail-pengajuan" class="btn btn-sm btn-primary">Detail</a>
                        <a href="" class="btn btn-sm btn-danger">Tolak</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo htmlentities($cnt + 1); ?></td>
                    <td>1234567892</td>
                    <td>Abdul</td>
                    <td>Perizinan</td>
                    <td>21-02-2024</td>
                    <td class="text-center">
                        <a href="detail-pengajuan" class="btn btn-sm btn-primary">Detail</a>
                        <a href="" class="btn btn-sm btn-danger">Tolak</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo htmlentities($cnt + 2); ?></td>
                    <td>1234567893</td>
                    <td>Agus</td>
                    <td>Pengantar SKCK</td>
                    <td>21-02-2024</td>
                    <td class="text-center">
                        <a href="detail-pengajuan" class="btn btn-sm btn-primary">Detail</a>
                        <a href="" class="btn btn-sm btn-danger">Tolak</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo htmlentities($cnt + 3); ?></td>
                    <td>1234567894</td>
                    <td>Abdi</td>
                    <td>SKTM</td>
                    <td>21-02-2024</td>
                    <td class="text-center">
                        <a href="detail-pengajuan" class="btn btn-sm btn-primary">Detail</a>
                        <a href="" class="btn btn-sm btn-danger">Tolak</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo htmlentities($cnt + 4); ?></td>
                    <td>1234567894</td>
                    <td>Abdi</td>
                    <td>SKTM</td>
                    <td>21-02-2024</td>
                    <td class="text-center">
                        <a href="detail-pengajuan" class="btn btn-sm btn-primary">Detail</a>
                        <a href="" class="btn btn-sm btn-danger">Tolak</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo htmlentities($cnt + 5); ?></td>
                    <td>1234567894</td>
                    <td>Abdi</td>
                    <td>SKTM</td>
                    <td>21-02-2024</td>
                    <td class="text-center">
                        <a href="detail-pengajuan" class="btn btn-sm btn-primary">Detail</a>
                        <a href="" class="btn btn-sm btn-danger">Tolak</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo htmlentities($cnt + 6); ?></td>
                    <td>1234567894</td>
                    <td>Abdi</td>
                    <td>SKTM</td>
                    <td>21-02-2024</td>
                    <td class="text-center">
                        <a href="detail-pengajuan" class="btn btn-sm btn-primary">Detail</a>
                        <a href="" class="btn btn-sm btn-danger">Tolak</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo htmlentities($cnt + 7); ?></td>
                    <td>1234567894</td>
                    <td>Abdi</td>
                    <td>SKTM</td>
                    <td>21-02-2024</td>
                    <td class="text-center">
                        <a href="detail-pengajuan" class="btn btn-sm btn-primary">Detail</a>
                        <a href="" class="btn btn-sm btn-danger">Tolak</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo htmlentities($cnt + 8); ?></td>
                    <td>1234567894</td>
                    <td>Abdi</td>
                    <td>SKTM</td>
                    <td>21-02-2024</td>
                    <td class="text-center">
                        <a href="detail-pengajuan" class="btn btn-sm btn-primary">Detail</a>
                        <a href="" class="btn btn-sm btn-danger">Tolak</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo htmlentities($cnt + 9); ?></td>
                    <td>1234567894</td>
                    <td>Abdi</td>
                    <td>SKTM</td>
                    <td>21-02-2024</td>
                    <td class="text-center">
                        <a href="detail-pengajuan" class="btn btn-sm btn-primary">Detail</a>
                        <a href="" class="btn btn-sm btn-danger">Tolak</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo htmlentities($cnt + 10); ?></td>
                    <td>1234567894</td>
                    <td>Abdi</td>
                    <td>SKTM</td>
                    <td>21-02-2024</td>
                    <td class="text-center">
                        <a href="detail-pengajuan" class="btn btn-sm btn-primary">Detail</a>
                        <a href="" class="btn btn-sm btn-danger">Tolak</a>
                    </td>
                </tr>
                <tr>
                    <td><?php echo htmlentities($cnt + 11); ?></td>
                    <td>1234567894</td>
                    <td>Abdi</td>
                    <td>SKTM</td>
                    <td>21-02-2024</td>
                    <td class="text-center">
                        <a href="detail-pengajuan" class="btn btn-sm btn-primary">Detail</a>
                        <a href="" class="btn btn-sm btn-danger">Tolak</a>
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