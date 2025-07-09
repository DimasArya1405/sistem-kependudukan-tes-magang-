@extends('adminlte::page')

@section('title', 'Tambah Pendidikan')

@section('content')
<div class="container">
    <h3>Tambah Pendidikan</h3>
    <form action="{{ route('pendidikan.store') }}" method="POST">
        @csrf
        @include('pendidikan.form')
        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('pendidikan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
