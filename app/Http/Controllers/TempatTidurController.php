<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempatTidurController extends Controller
{
    public function index()
    // {
    //     $data['tempat'] = \DB::table('t_tmpt_tidur')->join('t_gedung', 't_tmpt_tidur.id_gedung', '=', 't_gedung.id')->select('t_tmpt_tidur.*', 't_gedung.nama_gedung');
    //     // $data['tempat'] = \App\TempatTidur::get();
        return view('tempat-tidur.main-tempat-tidur');
    }

    public function input()
    {
        return view('tempat-tidur.form-tempat-tidur');
    }
}
