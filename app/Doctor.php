<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'nama_dokter', 'sip', 'no_telp'
    ];

    public function medical_records()
    {
        return $this->hasMany('App\MedicalRecord');
    }
}
