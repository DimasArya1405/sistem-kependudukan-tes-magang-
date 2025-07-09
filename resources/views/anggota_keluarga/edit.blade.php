@extends('adminlte::page')

@section('title', 'Edit Anggota Keluarga')

@section('content_header')
    <h1>Edit Anggota Keluarga</h1>
@stop

@section('content')
    <form action="{{ route('anggota-keluarga.update', $anggotaKeluarga->id) }}" method="POST">
        @csrf @method('PUT')
        @include('anggota_keluarga.form')
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@stop
