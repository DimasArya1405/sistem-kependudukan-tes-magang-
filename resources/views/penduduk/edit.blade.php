@extends('adminlte::page')

@section('title', 'Edit Penduduk')

@section('content')
<div class="container">
    <h3>Edit Penduduk</h3>
    <form action="{{ route('penduduk.update', $penduduk->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('penduduk.form', ['penduduk' => $penduduk])
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('penduduk.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
