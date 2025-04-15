<h1>Tambah Staf</h1>
<form action="{{ route('staf.store') }}" method="POST">
    @csrf
    Nama: <input type="text" name="nama"><br>
    Departemen: <input type="text" name="departemen"><br>
    Nomor Telepon: <input type="text" name="nomor_telepon"><br>
    Gaji: <input type="number" name="gaji"><br>
    <button type="submit">Simpan</button>
</form>