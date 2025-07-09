<?php

// app/Http/Controllers/DashboardController.php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Keluarga;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung total data
        $jumlahPenduduk = Penduduk::count();
        $jumlahPekerjaan = Pekerjaan::count();
        $jumlahPendidikan = Pendidikan::count();
        $jumlahKeluarga = Keluarga::count();

        // Hitung berdasarkan jenis kelamin
        $jumlahL = Penduduk::where('jenis_kelamin', 'L')->count();
        $jumlahP = Penduduk::where('jenis_kelamin', 'P')->count();

        // Kirim ke view dashboard
        return view('admin.dashboard', compact(
            'jumlahPenduduk',
            'jumlahPekerjaan',
            'jumlahPendidikan',
            'jumlahKeluarga',
            'jumlahL',
            'jumlahP'
        ));
    }
}

