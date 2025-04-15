<h1>Edit Staf</h1>
@if ($staf)
<form action="{{ route('staf.update', $staf['id_staf']) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="NAMA" value="{{ $staf['NAMA'] }}"><br>
    <input type="text" name="DEPARTEMEN" value="{{ $staf['DEPARTEMEN'] }}"><br>
    <input type="text" name="NOMOR_TELEPON" value="{{ $staf['NOMOR_TELEPON'] }}"><br>
    <input type="number" name="GAJI" value="{{ $staf['GAJI'] }}"><br>
    <button type="submit">Update</button>
</form>
@else
    <p>Data tidak ditemukan.</p>
@endif
<a href="{{ route('staf.index') }}">Kembali</a>
