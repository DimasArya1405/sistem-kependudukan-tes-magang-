@extends('adminlte::page')

@section('title', 'Data Pendidikan')

@section('content')
<div class="container">
    <h3>Data Pendidikan</h3>
    <a href="{{ route('pendidikan.create') }}" class="btn btn-success mb-3">+ Tambah Pendidikan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pendidikan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pendidikan as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td>
                    <a href="{{ route('pendidikan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pendidikan.destroy', $item->id) }}" method="POST" class="d-inline"
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
