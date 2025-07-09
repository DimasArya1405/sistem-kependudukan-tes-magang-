<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PendudukController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/penduduk', function () {return view('admin.dashboard');});
Route::get('/pekerjaan', function () {return view('pekerjaan.index');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('pekerjaan', PekerjaanController::class);
Route::resource('admin/penduduk', App\Http\Controllers\PendudukController::class);
Route::resource('admin/pendidikan', App\Http\Controllers\PendidikanController::class);
Route::resource('admin/keluarga', App\Http\Controllers\KeluargaController::class);
Route::resource('admin/anggota-keluarga', App\Http\Controllers\AnggotaKeluargaController::class);

// EKSPORT PDF
Route::get('admin/pekerjaan/export/pdf', [PekerjaanController::class, 'exportPdf'])->name('pekerjaan.export.pdf');
Route::get('admin/penduduk/export/pdf', [\App\Http\Controllers\PendudukController::class, 'exportPdf'])->name('penduduk.export.pdf');

// IMPORT EXCEL
Route::post('/pekerjaan/import', [PekerjaanController::class, 'import'])->name('pekerjaan.import');
Route::post('/penduduk/import', [PendudukController::class, 'import'])->name('penduduk.import');

// EKSPORT STRUK
Route::get('penduduk/{id}/cetak', [PendudukController::class, 'cetak'])->name('penduduk.cetak');




