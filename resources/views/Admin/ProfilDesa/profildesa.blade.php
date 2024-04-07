<div class="tab-pane fade show active profile-overview" id="profile-overview">
    <h5 class="card-title">Visi Misi</h5>
    <p class="small fst-italic">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti molestias eos deserunt dignissimos quisquam veniam, maiores consectetur similique cum voluptatibus incidunt at odit. Veritatis, quasi. Similique modi inventore odit cum.</p>

    <h5 class="card-title">Perangkat Desa</h5>

    @foreach($nama as $item)
    <div class="row">
        <div class="col-lg-3 col-md-4 label ">
            {{ str_Ireplace('Pesudukuh', '',$item['pangkat'])}}</div>
        <div class="col-lg-9 col-md-8">{{$item['nama'] }}</div>
    </div>
@endforeach
</div>

{{-- {{ dd($nama)}} --}}