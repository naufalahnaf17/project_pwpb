<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DokterModel extends Model
{
    public $table = 't_dokter';

    protected $fillable = [
        'nama_dokter', 'no_hp', 'id_spesialis', 'no_izin_praktek', 'alumni'
    ];
}
