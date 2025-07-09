@extends('adminlte::page')

@section('title', 'Data Pekerjaan')

@section('content')
    <div class="container">
        <h3>Data Pekerjaan</h3>
        <div class="d-flex justify-content-between">
        <div class="d-flex">
        <a href="{{ route('pekerjaan.create') }}" class="btn btn-success mb-3 mr-">+ Tambah Pekerjaan</a>
        <a href="{{ route('pekerjaan.export.pdf') }}" target="_blank" class="btn btn-danger mb-3">
            Export PDF
        </a>
        </div>
        <form action="{{ route('pekerjaan.import') }}" method="POST" enctype="multipart/form-data" class="mb-3">
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

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pekerjaan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pekerjaan as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>
                            <a href="{{ route('pekerjaan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('pekerjaan.destroy', $item->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Belum ada data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
