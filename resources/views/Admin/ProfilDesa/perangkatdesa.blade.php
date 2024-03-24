<!-- Profile Edit Form -->
<form method="post" action="{{route('proses-upload')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
        @foreach($nama as $nama)
            <div class="row mb-3">
                <label for="{{ str_Ireplace('PESUDUKUH', '',$nama->pangkat)}}" class="col-md-4 col-lg-3 col-form-label">{{ str_Ireplace('PESUDUKUH', '',$nama->pangkat)}}</label>
                <div class="col-md-8 col-lg-9">
                    <input name="{{ str_Ireplace('PESUDUKUH', '',$nama->pangkat)}}" type="text" class="form-control" id="{{ str_Ireplace('PESUDUKUH', '',$nama->pangkat)}}" value="{{ $nama['nama'] }}">
                </div>
                <div class="form-group">
                <input type="file" name="{{ str_Ireplace('PESUDUKUH', '',$nama->pangkat)}}" class="form-control-file ">
                </div>
            </div>
        @endforeach
    
        <div class="text-right">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
    </form>
</form><!-- End Profile Edit Form -->