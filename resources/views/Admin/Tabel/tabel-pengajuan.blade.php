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
                
                
                {{-- <div style="opacity: 0%">{{$cnt =1}}</div> --}}
                @php
                $cnt = 1;
                @endphp
                @foreach($tabel as $item)
                <tr>
                    <td>{{ $cnt++}}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->Keterangan }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>
                        <form action="{{ route('pengajuansurat') }}" method="POST">
                            @csrf
                            @method('POST')
            
                            <!-- Add a hidden input field for the id -->
                            <input type="hidden" name="id" value="{{ $item->id }}">
            
                            <button type="submit" class="btn btn-primary">
                                Button
                            </button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
               
            </tbody>
        </table>
    </div>
</div>