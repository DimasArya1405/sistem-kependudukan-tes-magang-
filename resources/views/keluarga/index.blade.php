@extends('adminlte::page')
@section('title', 'Data Keluarga')

@section('content')
<div class="container">
    <h3>Data Keluarga</h3>
    <a href="{{ route('keluarga.create') }}" class="btn btn-success mb-3">+ Tambah Keluarga</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @include('ekspor.ekspor')
    <table class="table table-bordered table-striped dataTable">
        <thead>
            <tr>
                <th>No</th>
                <th>No KK</th>
                <th>Alamat</th>
                <th>RT/RW</th>
                <th>Kepala Keluarga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($keluarga as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->no_kk }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->rt_rw }}</td>
                <td>{{ $item->kepalaKeluarga->nama ?? '-' }}</td>
                <td>
                    <a href="{{ route('keluarga.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('keluarga.destroy', $item->id) }}" method="POST" class="d-inline"
                        onsubmit="return confirm('Yakin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
