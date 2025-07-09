<?php

namespace App\Http\Controllers;

use App\Models\Keluarga;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    public function index()
    {
        $keluarga = Keluarga::with('kepalaKeluarga')->get();
        return view('keluarga.index', compact('keluarga'));
    }

    public function create()
    {
        // Ambil semua ID kepala keluarga yang sudah terpakai
        $sudahDipakai = Keluarga::pluck('kepala_keluarga_id')->filter();

        // Ambil penduduk yang ID-nya belum terdaftar sebagai kepala keluarga
        $penduduk = Penduduk::whereNotIn('id', $sudahDipakai)->get();

        return view('keluarga.create', compact('penduduk'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'no_kk' => 'required|unique:keluarga,no_kk',
            'kepala_keluarga_id' => 'nullable|exists:penduduk,id',
        ]);

        Keluarga::create($request->all());
        return redirect()->route('keluarga.index')->with('success', 'Data keluarga berhasil ditambahkan.');
    }

    public function edit(Keluarga $keluarga)
    {
        $sudahDipakai = Keluarga::where('id', '!=', $keluarga->id)
            ->pluck('kepala_keluarga_id')
            ->filter();

        $penduduk = Penduduk::whereNotIn('id', $sudahDipakai)->get();

        return view('keluarga.edit', compact('keluarga', 'penduduk'));
    }


    public function update(Request $request, Keluarga $keluarga)
    {
        $request->validate([
            'no_kk' => 'required|unique:keluarga,no_kk,' . $keluarga->id,
        ]);

        $keluarga->update($request->all());
        return redirect()->route('keluarga.index')->with('success', 'Data keluarga berhasil diperbarui.');
    }

    public function destroy(Keluarga $keluarga)
    {
        $keluarga->delete();
        return redirect()->route('keluarga.index')->with('success', 'Data keluarga berhasil dihapus.');
    }
}
