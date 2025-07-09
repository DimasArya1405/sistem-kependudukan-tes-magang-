<!DOCTYPE html>
<html>
<head>
    <title>Struk Data Penduduk</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { border-collapse: collapse; width: 100%; }
        th, td { text-align: left; padding: 6px; }
        tr:nth-child(even) { background-color: #f2f2f2 }
    </style>
</head>
<body>
    <h3>Struk Data Penduduk</h3>
    <hr>
    <table>
        <tr><th>NIK</th><td>{{ $penduduk->nik }}</td></tr>
        <tr><th>Nama</th><td>{{ $penduduk->nama }}</td></tr>
        <tr><th>TTL</th><td>{{ $penduduk->tempat_lahir }}, {{ $penduduk->tanggal_lahir }}</td></tr>
        <tr><th>Jenis Kelamin</th><td>{{ $penduduk->jenis_kelamin }}</td></tr>
        <tr><th>Agama</th><td>{{ $penduduk->agama }}</td></tr>
        <tr><th>Pekerjaan</th><td>{{ $penduduk->pekerjaan->nama ?? '-' }}</td></tr>
        <tr><th>Pendidikan</th><td>{{ $penduduk->pendidikan->nama ?? '-' }}</td></tr>
        <tr><th>Alamat</th><td>{{ $penduduk->alamat }}</td></tr>
    </table>
    <br><br>
    <small>Dicetak tanggal: {{ now()->format('d-m-Y H:i') }}</small>
</body>
</html>
