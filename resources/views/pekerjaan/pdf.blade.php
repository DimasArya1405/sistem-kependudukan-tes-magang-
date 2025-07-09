<!DOCTYPE html>
<html>
<head>
    <title>Data Pekerjaan</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
        }
        th, td {
            border: 1px solid #000;
            padding: 6px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h3>Data Pekerjaan</h3>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pekerjaan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $i => $item)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $item->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
