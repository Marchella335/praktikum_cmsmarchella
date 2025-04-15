<h1>Detail Staf</h1>
@if ($staf)
    <p>Nama: {{ $staf['NAMA'] }}</p>
    <p>Departemen: {{ $staf['DEPARTEMEN'] }}</p>
    <p>Nomor Telepon: {{ $staf['NOMOR_TELEPON'] }}</p>
    <p>Gaji: {{ $staf['GAJI'] }}</p>

    <a href="{{ route('staf.edit', $staf['id_staf']) }}">Edit</a>

    <form action="{{ route('staf.destroy', $staf['id_staf']) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Hapus</button>
    </form>
@else
    <p>Data tidak ditemukan.</p>
@endif
<a href="{{ route('staf.index') }}">Kembali</a>
<a href="{{ route('staf.confirmDelete', $staf['id_staf']) }}">Hapus</a>
