@extends('adminlte::page')
@section('title', 'Edit Keluarga')

@section('content')
<div class="container">
    <h3>Edit Keluarga</h3>
    <form action="{{ route('keluarga.update', $keluarga->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('keluarga.form')
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('keluarga.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
