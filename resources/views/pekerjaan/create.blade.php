@extends('adminlte::page')

@section('title', 'Tambah Pekerjaan')

@section('content')
<div class="container">
    <h3>Tambah Pekerjaan</h3>
    <form action="{{ route('pekerjaan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Pekerjaan</label>
            <input type="text" name="nama" class="form-control" required value="{{ old('nama') }}">
            @error('nama')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <a href="{{ route('pekerjaan.index') }}" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
