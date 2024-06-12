<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemutakhiranPetani extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('id_pml', 'like', '%' . $search . '%')
                ->orWhere('pml', 'like', '%' . $search . '%')
                ->orWhere('id_ppl', 'like', '%' . $search . '%')
                ->orWhere('ppl', 'like', '%' . $search . '%')
                ->orWhere('kode_kec', 'like', '%' . $search . '%')
                ->orWhere('kecamatan', 'like', '%' . $search . '%')
                ->orWhere('kode_desa', 'like', '%' . $search . '%')
                ->orWhere('desa', 'like', '%' . $search . '%')
                ->orWhere('nbs', 'like', '%' . $search . '%')
                ->orWhere('nks', 'like', '%' . $search . '%')
                ->orWhere('nama_sls', 'like', '%' . $search . '%')
                ->orWhere('status', 'like', '%' . $search . '%')
                ->orWhere('penyelesaian_ruta', 'like', '%' . $search . '%')
                ->orWhere('beban_kerja', 'like', '%' . $search . '%')
                ->orWhere('id', 'like', '%' . $search . '%');
        });
    }
}
