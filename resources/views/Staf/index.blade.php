<h1>Daftar Staf</h1>
<a href="{{ route('staf.create') }}">+ Tambah Staf</a>
<ul>
@foreach ($data as $s)
    <li>
        {{ $s['NAMA'] }} - <a href="{{ route('staf.show', $s['id_staf']) }}">Detail</a>
    </li>
@endforeach
</ul>