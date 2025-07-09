@extends('adminlte::page')

@section('title', 'Data Anggota Keluarga')

@section('content_header')
    <h1>Data Anggota Keluarga</h1>
@stop

@section('content')
    <a href="{{ route('anggota-keluarga.create') }}" class="btn btn-primary mb-3">Tambah</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>No KK</th>
                <th>Nama Penduduk</th>
                <th>Hubungan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($anggota as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->keluarga->no_kk }}</td>
                    <td>{{ $item->penduduk->nama }}</td>
                    <td>{{ $item->hubungan_dalam_keluarga }}</td>
                    <td>
                        <a href="{{ route('anggota-keluarga.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('anggota-keluarga.destroy', $item->id) }}" method="POST" style="display:inline-block">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Yakin?')" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
