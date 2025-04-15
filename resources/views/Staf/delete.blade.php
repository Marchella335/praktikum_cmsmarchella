<h1>Hapus Staf</h1>
<p>Yakin ingin menghapus staf: {{ $staf['nama'] }}?</p>
<form action="{{ route('staf.destroy', $staf['id_staf']) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Ya, Hapus</button>
    <a href="{{ route('staf.index') }}">Batal</a>
</form>