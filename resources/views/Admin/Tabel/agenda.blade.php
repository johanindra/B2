<div class="card">
    <!-- <div class="filter">
        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
                <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
        </ul>
    </div> -->

    <div class="card-body pb-0">
        <h5 class="card-title">Agenda Desa | Kabar Desa</span></h5>

        <div class="news">
            @foreach($kabar_desa as $g)
            <div class="post-item clearfix">
                {{-- <img src="150px" src="{{ url('/data_foto_berita/'.$g->foto) }}" alt=""> --}}
                <img width="150px" src="{{ url('/data_foto_berita/'.$g->foto) }}">
                <h4><a href="{{ route('detail.kabar', ['id' => $g->id_berita]) }}">{{$g->judul}}</a></h4>
                <p>{{ Str::limit($g->isi, 100) }}</p>
            </div><br>
            @endforeach
        </div><!-- End sidebar recent posts-->

    </div>
</div>