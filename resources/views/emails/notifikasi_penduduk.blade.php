<!DOCTYPE html>
<html>
<body>
    <h2>Penduduk Baru</h2>
    <p>Berikut ini data penduduk baru:</p>

    <ul>
        <li>NIK: {{ $penduduk->nik }}</li>
        <li>Nama: {{ $penduduk->nama }}</li>
        <li>TTL: {{ $penduduk->tempat_lahir }}, {{ $penduduk->tanggal_lahir }}</li>
    </ul>

    <p>Terima kasih.</p>
</body>
</html>
