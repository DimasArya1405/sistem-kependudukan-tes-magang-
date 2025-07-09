<?php

namespace App\Imports;

use App\Models\Penduduk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PendudukImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Penduduk([
            'nik' => $row['nik'],
            'nama' => $row['nama'],
            'tempat_lahir' => $row['tempat_lahir'],
            'tanggal_lahir' => $row['tanggal_lahir'],
            'jenis_kelamin' => $row['jenis_kelamin'],
            'alamat' => $row['alamat'],
            'rt_rw' => $row['rt_rw'],
            'kelurahan' => $row['kelurahan'],
            'kecamatan' => $row['kecamatan'],
            'agama' => $row['agama'],
            'status_perkawinan' => $row['status_perkawinan'],
            'pekerjaan_id' => $row['pekerjaan_id'],
            'pendidikan_id' => $row['pendidikan_id'],
            'kewarganegaraan' => $row['kewarganegaraan'],
        ]);
    }
}


