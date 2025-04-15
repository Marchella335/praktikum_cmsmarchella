<h1>Tambah Staf</h1>
<form action="{{ route('staf.store') }}" method="POST">
    @csrf
    <input type="text" name="NAMA" placeholder="Nama"><br>
    <input type="text" name="DEPARTEMEN" placeholder="Departemen"><br>
    <input type="text" name="NOMOR_TELEPON" placeholder="Nomor Telepon"><br>
    <input type="number" name="GAJI" placeholder="Gaji"><br>
    <button type="submit">Simpan</button>
</form>
<a href="{{ route('staf.index') }}">Kembali</a>
