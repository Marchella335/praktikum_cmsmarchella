<h1>Edit Staf</h1>
<form action="{{ route('staf.update', $staf['id_staf']) }}" method="POST">
    @csrf
    @method('PUT')
    Nama: <input type="text" name="nama" value="{{ $staf['nama'] }}"><br>
    Departemen: <input type="text" name="departemen" value="{{ $staf['departemen'] }}"><br>
    Nomor Telepon: <input type="text" name="nomor_telepon" value="{{ $staf['nomor_telepon'] }}"><br>
    Gaji: <input type="number" name="gaji" value="{{ $staf['gaji'] }}"><br>
    <button type="submit">Update</button>
</form>