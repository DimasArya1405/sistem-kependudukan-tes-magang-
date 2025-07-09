@extends('adminlte::page')

@section('title', 'Data Penduduk')

@section('content')
    <div class="container">
        <h3>Data Penduduk</h3>
        <a href="{{ route('penduduk.create') }}" class="btn btn-success mb-3">+ Tambah Penduduk</a>
        <a href="{{ route('penduduk.export.pdf') }}" target="_blank" class="btn btn-danger mb-3">
            <i class="fas fa-file-pdf"></i> Export PDF
        </a>
        <form action="{{ route('penduduk.import') }}" method="POST" enctype="multipart/form-data" class="mb-3">
            @csrf
            <div class="input-group">
                <input type="file" name="file" class="form-control" required>
                <button type="submit" class="btn btn-primary">Import Excel</button>
            </div>
        </form>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @include('ekspor.ekspor')

    <table class="table table-bordered table-striped dataTable">
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>TTL</th>
                <th>Gender</th>
                <th>Pekerjaan</th>
                <th>Pendidikan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penduduk as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->tempat_lahir }}, {{ $item->tanggal_lahir }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->pekerjaan->nama ?? '-' }}</td>
                    <td>{{ $item->pendidikan->nama ?? '-' }}</td>
                    <td>
                        <a href="{{ route('penduduk.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('penduduk.destroy', $item->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Yakin hapus data?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                        <a href="{{ route('penduduk.cetak', $item->id) }}" target="_blank"
                            class="btn btn-secondary btn-sm">
                            <i class="fas fa-print"></i> Cetak Struk
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
@endsection
