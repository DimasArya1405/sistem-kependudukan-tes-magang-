@extends('adminlte::page')

@section('title', 'Tambah Anggota Keluarga')

@section('content_header')
    <h1>Tambah Anggota Keluarga</h1>
@stop

@section('content')
    <form action="{{ route('anggota-keluarga.store') }}" method="POST">
        @csrf
        @include('anggota_keluarga.form')
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@stop
