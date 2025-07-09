<!DOCTYPE html>
<html>
<head>
    <title>Data Penduduk</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #000;
            padding: 4px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h3>Data Penduduk</h3>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>TTL</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>RT/RW</th>
                <th>Kelurahan</th>
                <th>Kecamatan</th>
                <th>Agama</th>
                <th>Status Perkawinan</th>
                <th>Pekerjaan</th>
                <th>Pendidikan</th>
                <th>Kewarganegaraan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $i => $item)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $item->nik }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->tempat_lahir }}, {{ $item->tanggal_lahir }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->rt_rw }}</td>
                <td>{{ $item->kelurahan }}</td>
                <td>{{ $item->kecamatan }}</td>
                <td>{{ $item->agama }}</td>
                <td>{{ $item->status_perkawinan }}</td>
                <td>{{ $item->pekerjaan->nama ?? '-' }}</td>
                <td>{{ $item->pendidikan->nama ?? '-' }}</td>
                <td>{{ $item->kewarganegaraan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
