<?php

namespace App\Http\Controllers;

use App\Models\AnggotaKeluarga;
use App\Models\Keluarga;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class AnggotaKeluargaController extends Controller
{
    public function index()
    {
        $anggota = AnggotaKeluarga::with(['keluarga', 'penduduk'])->get();
        return view('anggota_keluarga.index', compact('anggota'));
    }

    public function create()
    {
        $keluarga = Keluarga::all();

        // Ambil ID penduduk yang sudah jadi anggota keluarga (tidak boleh double)
        $sudahAnggota = AnggotaKeluarga::pluck('id_penduduk');

        // Semua penduduk yang belum jadi anggota keluarga (boleh jadi kepala keluarga)
        $penduduk = Penduduk::whereNotIn('id', $sudahAnggota)->get();

        return view('anggota_keluarga.create', compact('keluarga', 'penduduk'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'id_keluarga' => 'required|exists:keluarga,id',
            'id_penduduk' => 'required|exists:penduduk,id',
            'hubungan_dalam_keluarga' => 'nullable|string|max:50'
        ]);

        AnggotaKeluarga::create($request->all());
        return redirect()->route('anggota-keluarga.index')->with('success', 'Anggota keluarga berhasil ditambahkan');
    }

    public function edit($id)
    {
        $anggotaKeluarga = AnggotaKeluarga::findOrFail($id);
        $keluarga = Keluarga::all();

        // Ambil semua id penduduk yang sudah jadi anggota keluarga, KECUALI yang sedang diedit
        $sudahAnggota = AnggotaKeluarga::where('id', '!=', $id)->pluck('id_penduduk');

        $penduduk = Penduduk::whereNotIn('id', $sudahAnggota)->orWhere('id', $anggotaKeluarga->id_penduduk)->get();

        return view('anggota_keluarga.edit', compact('anggotaKeluarga', 'keluarga', 'penduduk'));
    }

    public function update(Request $request, AnggotaKeluarga $anggotaKeluarga)
    {
        $request->validate([
            'id_keluarga' => 'required|exists:keluarga,id',
            'id_penduduk' => 'required|exists:penduduk,id',
            'hubungan_dalam_keluarga' => 'nullable|string|max:50'
        ]);

        $anggotaKeluarga->update($request->all());
        return redirect()->route('anggota-keluarga.index')->with('success', 'Data anggota keluarga berhasil diperbarui');
    }

    public function destroy(AnggotaKeluarga $anggotaKeluarga)
    {
        $anggotaKeluarga->delete();
        return redirect()->route('anggota-keluarga.index')->with('success', 'Data berhasil dihapus');
    }
}