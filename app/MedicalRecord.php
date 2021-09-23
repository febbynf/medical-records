<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    protected $fillable = [
        'id_dokter', 
        'id_pasien', 
        'anamnesia', 
        'riwayat_perjalanan_penyakit', 
        'pemeriksaan_fisik', 
        'penemuan_klinik',
        'diagnosa',
        'obat_rs',
        'tindakan_rs',
        'kondisi_pulang',
        'anjuran_kontrol',
        'alasan_pulang',
        'obat_pulang',
        'ttd_dokter',
        'dokter',
        'tanggal_pulang',
        'jam_pulang'
    ];

    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
    }
}
