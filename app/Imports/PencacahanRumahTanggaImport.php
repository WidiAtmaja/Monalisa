<?php

namespace App\Imports;

use App\Models\PencacahanRumahTangga;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use App\Models\UserMitra;



class PencacahanRumahTanggaImport implements ToModel, WithStartRow
{
    protected $kegiatan_id, $tgl_awal, $tgl_akhir;

    public function __construct($kegiatan_id, $tgl_awal, $tgl_akhir)
    {
        $this->kegiatan_id = $kegiatan_id;
        $this->tgl_awal = $tgl_awal;
        $this->tgl_akhir = $tgl_akhir;
    }

    public function model(array $row)
    {
        PencacahanRumahTangga::create([
            'kegiatan_id' => $this->kegiatan_id, // Nilai kegiatan_id yang diteruskan dari formulir
            'tgl_awal' => $this->tgl_awal,
            'tgl_akhir' => $this->tgl_akhir,
            'id_pml' => $row[1],
            'pml' => $row[2],
            'id_ppl' => $row[3],
            'ppl' => $row[4],
            'kode_kec' => $row[5],
            'kecamatan' => $row[6],
            'kode_desa' => $row[7],
            'desa' => $row[8],
            'nks' => $row[9],
        ]);

        UserMitra::updateOrCreate(
            ['ppl_id' => $row[3]],
            ['name' => $row[4]]
        );
    }

    public function startRow(): int
    {
        return 2; // Mulai membaca dari baris pertama
    }
}
