@extends('adminlte::page')

@section('title', 'Tambah Penduduk')

@section('content')
<div class="container">
    <h3>Tambah Penduduk</h3>
    <form action="{{ route('penduduk.store') }}" method="POST">
        @csrf
        @include('penduduk.form')
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('penduduk.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
