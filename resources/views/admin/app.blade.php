@extends('adminlte::page')

@section('title', $title ?? 'Dashboard')

@section('content_header')
  <h1>@yield('page-title', 'Admin Panel')</h1>
@stop

@section('content')
  @yield('content')
@stop

@section('css')
  {{-- Tambahkan CSS khusus --}}
@stop

@section('js')
  {{-- Tambahkan JS khusus --}}
@stop
