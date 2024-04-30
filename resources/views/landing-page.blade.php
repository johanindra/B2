<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>
</head>

<body>
    <section>
        <h1>Nama Kepala Desa</h1>
        <p>{{ $kepalaDesa->nama }}</p>

        <h2>Visi Desa</h2>
        <p>{{ $visi->isi }}</p>

        <h2>Misi Desa</h2>
        <p>{{ $misi->isi }}</p>
    </section>

    <section>
        <h2>Jumlah Surat Masuk</h2>
        <ul>
            <li>SKCK: {{ $suratSkck }}</li>
            <li>SKTM: {{ $suratSktm }}</li>
            <li>Surat Izin: {{ $suratIzin }}</li>
        </ul>
    </section>

    <section>
        <h2>Agenda Desa</h2>
        <ul>
            @foreach($agendaDesa as $agenda)
            <li>
                <h3>{{ $agenda->judul }}</h3>
                <img src="{{ asset('images/' . $agenda->foto) }}" alt="{{ $agenda->judul }}">
            </li>
            @endforeach
        </ul>
    </section>

    <section>
        <h2>Struktur Pemerintahan Desa</h2>
        <ul>
            @foreach($strukturDesa as $struktur)
            <li>
                <p>{{ $struktur->pangkat }} - {{ $struktur->nama }}</p>
                <img src="{{ asset('images/' . $struktur->foto_profil) }}" alt="{{ $struktur->pangkat }}">
            </li>
            @endforeach
        </ul>
    </section>
</body>

</html>