<!-- Modal Tambah Agenda -->
<div class="modal fade" id="tambahAgendaModal" tabindex="-1" role="dialog" aria-labelledby="tambahAgendaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahAgendaModalLabel">Tambah Agenda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- <form>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" placeholder="Masukkan judul agenda">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_mulai">Tanggal Mulai</label>
                        <input type="date" class="form-control" id="tanggal_mulai">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_selesai">Tanggal Selesai</label>
                        <input type="date" class="form-control" id="tanggal_selesai">
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control-file" id="foto">
                    </div>
                </form> -->
                <div class="modal-body">


                    {{-- <form action="/upload/proses" method="POST" enctype="multipart/form-data"> --}}
                        <form id="inputForm" action="{{ route('uploadKabar') }}" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="judul"><b>Judul</b></label>
                            <input type="text" class="form-control" id="judul" placeholder="Masukkan judul agenda" name="judul">
                        </div>
                        <div class="form-group">
                            <label for="tanggal"><b>Tanggal</b></label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_selesai"><b>Foto</b></label><br>
                            <input type="file" name="foto">
                        </div>

                        <div class="form-group">
                            <label for="tanggal_selesai"><b>Deskripsi</b></label>
                            <textarea class="form-control" name="isi" placeholder="Masukkan keterangan"></textarea>
                        </div>
                        <div class="text-right">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <input type="submit" value="Simpan" class="btn btn-primary">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>