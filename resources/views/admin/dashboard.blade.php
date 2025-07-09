@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="mb-3">👋 Selamat Datang di Dashboard</h1>
@stop

@section('content')
<div class="row">

    <!-- Info Box: Total Penduduk -->
    <div class="col-md-3">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $jumlahPenduduk ?? 0 }}</h3>
                <p>Total Penduduk</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="{{ route('penduduk.index') }}" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- Info Box: Total Pekerjaan -->
    <div class="col-md-3">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $jumlahPekerjaan ?? 0 }}</h3>
                <p>Jenis Pekerjaan</p>
            </div>
            <div class="icon">
                <i class="fas fa-briefcase"></i>
            </div>
            <a href="{{ route('pekerjaan.index') }}" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- Info Box: Total Pendidikan -->
    <div class="col-md-3">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $jumlahPendidikan ?? 0 }}</h3>
                <p>Jenjang Pendidikan</p>
            </div>
            <div class="icon">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <a href="{{ route('pendidikan.index') }}" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- Info Box: Keluarga -->
    <div class="col-md-3">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ $jumlahKeluarga ?? 0 }}</h3>
                <p>Kepala Keluarga</p>
            </div>
            <div class="icon">
                <i class="fas fa-home"></i>
            </div>
            <a href="{{ route('keluarga.index') }}" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

</div>

{{-- Grafik Statistik --}}
<div class="card mt-4">
    <div class="card-header">
        <h3 class="card-title">Statistik Penduduk Berdasarkan Jenis Kelamin</h3>
    </div>
    <div class="card-body">
        <canvas id="genderChart"></canvas>
    </div>
</div>
@stop

@push('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const genderChart = new Chart(document.getElementById('genderChart'), {
        type: 'doughnut',
        data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                label: 'Jumlah',
                data: [{{ $jumlahL ?? 0 }}, {{ $jumlahP ?? 0 }}],
                backgroundColor: ['#36A2EB', '#FF6384'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                }
            }
        }
    });
</script>
@endpush
