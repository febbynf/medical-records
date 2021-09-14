<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dokter extends Model
{
    use SoftDeletes;

    protected $fillable = ['nama_dokter', 'sip'];

    public function pasien()
    {
        return $this->hasMany('App\Pasien');
    }
}
