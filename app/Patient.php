<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'nama_pasien', 'no_telp', 'alamat'
    ];
}
