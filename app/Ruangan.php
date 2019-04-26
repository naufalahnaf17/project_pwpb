<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    public $table = 't_ruangan';

    protected $fillable = [
        'id', 'no_ruangan', 'nama_ruangan', 'id_gedung'
    ];


    public function gedung()
    {
        return $this->belongsTo('App/Gedung', 'id_gedung');
    }
}
