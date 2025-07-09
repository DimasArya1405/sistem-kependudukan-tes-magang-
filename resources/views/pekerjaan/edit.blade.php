@extends('adminlte::page')

@section('title', 'Edit Pekerjaan')

@section('content')
<div class="container">
    <h3>Edit Pekerjaan</h3>
    <form action="{{ route('pekerjaan.update', $pekerjaan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Pekerjaan</label>
            <input type="text" name="nama" class="form-control" required value="{{ old('nama', $pekerjaan->nama) }}">
            @error('nama')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <a href="{{ route('pekerjaan.index') }}" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
