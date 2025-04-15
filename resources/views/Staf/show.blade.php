<h1>Detail Staf</h1>
<p>Nama: {{ $staf['nama'] }}</p>
<p>Departemen: {{ $staf['departemen'] }}</p>
<p>Nomor Telepon: {{ $staf['nomor_telepon'] }}</p>
<p>Gaji: Rp{{ number_format($staf['gaji'], 0, ',', '.') }}</p>
<a href="{{ route('staf.index') }}">Kembali</a>