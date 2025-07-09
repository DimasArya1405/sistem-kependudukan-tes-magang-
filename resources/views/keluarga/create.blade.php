@extends('adminlte::page')
@section('title', 'Tambah Keluarga')

@section('content')
<div class="container">
    <h3>Tambah Keluarga</h3>
    <form action="{{ route('keluarga.store') }}" method="POST">
        @csrf
        @include('keluarga.form')
        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('keluarga.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
