<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Imports\PekerjaanImport;
use Maatwebsite\Excel\Facades\Excel;


class PekerjaanController extends Controller
{
    public function index()
    {
        $pekerjaan = Pekerjaan::all();
        return view('pekerjaan.index', compact('pekerjaan'));
    }

    public function create()
    {
        return view('pekerjaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
        ]);

        Pekerjaan::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('pekerjaan.index')->with('success', 'Pekerjaan berhasil ditambahkan.');
    }

    public function show($id)
    {
        return redirect()->route('pekerjaan.index');
    }

    public function edit($id)
    {
        $pekerjaan = Pekerjaan::findOrFail($id);
        return view('pekerjaan.edit', compact('pekerjaan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
        ]);

        $pekerjaan = Pekerjaan::findOrFail($id);
        $pekerjaan->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('pekerjaan.index')->with('success', 'Pekerjaan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pekerjaan = Pekerjaan::findOrFail($id);
        $pekerjaan->delete();

        return redirect()->route('pekerjaan.index')->with('success', 'Pekerjaan berhasil dihapus.');
    }

    public function exportPdf()
    {
        $data = Pekerjaan::all();
        $pdf = Pdf::loadView('pekerjaan.pdf', compact('data'));
        return $pdf->download('data_pekerjaan.pdf');
    }

    // METHOD IMORT
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        Excel::import(new PekerjaanImport, $request->file('file'));

        return redirect()->route('pekerjaan.index')->with('success', 'Data pekerjaan berhasil diimport.');
    }


}
