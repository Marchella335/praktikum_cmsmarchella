<h1>Daftar Staf</h1>
<a href="{{ route('staf.create') }}">Tambah Staf</a>
<ul>
    @foreach ($daftarStaf as $staf)
        <li>
            {{ $staf['nama'] }} - {{ $staf['departemen'] }}
            <a href="{{ route('staf.show', $staf['id_staf']) }}">Lihat</a>
            <a href="{{ route('staf.edit', $staf['id_staf']) }}">Edit</a>
            <form action="{{ route('staf.destroy', $staf['id_staf']) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </li>
    @endforeach
</ul>