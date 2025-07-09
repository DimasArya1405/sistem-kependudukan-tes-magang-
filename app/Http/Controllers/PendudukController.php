<?php

namespace App\Http\Controllers;

use App\Imports\PekerjaanImport;
use App\Imports\PendudukImport;
use App\Mail\NotifikasiPendudukBaru;
use App\Models\Penduduk;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class PendudukController extends Controller
{
    public function index()
    {
        $penduduk = Penduduk::with(['pekerjaan', 'pendidikan'])->get();
        return view('penduduk.index', compact('penduduk'));
    }

    public function create()
    {
        $pekerjaan = Pekerjaan::all();
        $pendidikan = Pendidikan::all();
        return view('penduduk.create', compact('pekerjaan', 'pendidikan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:penduduk,nik',
            'nama' => 'required',
            'pekerjaan_id' => 'nullable|exists:pekerjaan,id',
            'pendidikan_id' => 'nullable|exists:pendidikan,id',
        ]);

        $penduduk = Penduduk::create($request->all());

        Mail::to('aryaempat444@gmail.com')->send(new NotifikasiPendudukBaru($penduduk));

        return redirect()->route('penduduk.index')->with('success', 'Data penduduk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $penduduk = Penduduk::findOrFail($id);
        $pekerjaan = Pekerjaan::all();
        $pendidikan = Pendidikan::all();
        return view('penduduk.edit', compact('penduduk', 'pekerjaan', 'pendidikan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nik' => 'required|unique:penduduk,nik,' . $id,
            'nama' => 'required',
            'pekerjaan_id' => 'nullable|exists:pekerjaan,id',
            'pendidikan_id' => 'nullable|exists:pendidikan,id',
        ]);

        $penduduk = Penduduk::findOrFail($id);
        $penduduk->update($request->all());

        return redirect()->route('penduduk.index')->with('success', 'Data penduduk berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Penduduk::findOrFail($id)->delete();
        return redirect()->route('penduduk.index')->with('success', 'Data penduduk berhasil dihapus.');
    }

    public function exportPdf()
    {
        $data = Penduduk::with('pekerjaan', 'pendidikan')->get(); // sesuaikan dengan relasi yang kamu punya

        $pdf = Pdf::loadView('penduduk.pdf', compact('data'))
            ->setPaper('a4', 'landscape');

        return $pdf->download('data_penduduk.pdf');
    }

    public function cetak($id)
    {
        $penduduk = Penduduk::with(['pekerjaan', 'pendidikan'])->findOrFail($id);
        $pdf = PDF::loadView('penduduk.struk', compact('penduduk'));
        return $pdf->download('struk_penduduk_' . $penduduk->nik . '.pdf');
    }

        // METHOD IMORT
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        Excel::import(new PendudukImport, $request->file('file'));

        return redirect()->route('penduduk.index')->with('success', 'Data penduduk berhasil diimport.');
    }
}
