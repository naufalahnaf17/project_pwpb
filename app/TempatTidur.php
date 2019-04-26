<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempatTidur extends Model
{
    public $table = 't_tmpt_tidur';
    protected $fillable = [' kode  ', 'nama_ruangan  ', 'nama_ge dung  ', 'status'];
}
