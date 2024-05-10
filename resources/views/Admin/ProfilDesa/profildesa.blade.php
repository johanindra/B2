<div class="tab-pane fade show active profile-overview" id="profile-overview">
    <h5 class="card-title">Visi Misi</h5>
    
    <div class="row align-items-center ">

        <div class="col ">
            <div class="text-center">
                <h4>Visi</h4>
            </div>
                <pre class="">{{ $visimisi->where('id', 'visi')->first()->isi ?? '' }}</pre>
           
           
        </div>

        <div class="col">
            <div class="text-center">
                <h4>Misi</h4>
            </div>
                <pre>{{ $visimisi->where('id', 'misi')->first()->isi ?? '' }}</pre>
            
           
        </div>
    </div>
    <h5 class="card-title mt-5">Perangkat Desa</h5>

    @foreach ($nama as $item)
        <div class="row">
            <div class="col-lg-3 col-md-4 label ">
                {{ str_Ireplace('Pesudukuh', '', $item['pangkat']) }}</div>
            <div class="col-lg-9 col-md-8">{{ $item['nama'] }}</div>
        </div>
    @endforeach
</div>

{{-- {{ dd($nama)}} --}}
