<h1>Konfirmasi Hapus Staf</h1>

@if ($staf)
    <p>Apakah kamu yakin ingin menghapus staf berikut?</p>

    <ul>
        <li><strong>Nama:</strong> {{ $staf['NAMA'] }}</li>
        <li><strong>Departemen:</strong> {{ $staf['DEPARTEMEN'] }}</li>
        <li><strong>Nomor Telepon:</strong> {{ $staf['NOMOR_TELEPON'] }}</li>
        <li><strong>Gaji:</strong> {{ $staf['GAJI'] }}</li>
    </ul>

    <form action="{{ route('staf.destroy', $staf['id_staf']) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Ya, Hapus</button>
        <a href="{{ route('staf.index') }}">Batal</a>
    </form>
@else
    <p>Data staf tidak ditemukan.</p>
    <a href="{{ route('staf.index') }}">Kembali</a>
@endif
