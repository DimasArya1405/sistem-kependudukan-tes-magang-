<?php

namespace App\Imports;

use App\Models\Pekerjaan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PekerjaanImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Pekerjaan([
            'nama' => $row['nama'],
        ]);
    }
}

