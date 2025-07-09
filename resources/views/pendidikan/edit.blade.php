@extends('adminlte::page')

@section('title', 'Edit Pendidikan')

@section('content')
<div class="container">
    <h3>Edit Pendidikan</h3>
    <form action="{{ route('pendidikan.update', $pendidikan->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('pendidikan.form')
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('pendidikan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
