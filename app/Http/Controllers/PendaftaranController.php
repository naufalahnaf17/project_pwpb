<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function create(){
      return view('pendaftaran.main-pendaftaran');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        unset($input['_token']);
        $status = \DB::table('t_pendaftaran')->insert($input);

        if($status){
          return redirect('pendaftaran.main-pendaftaran')->with('success','Data Berhasil Ditambahkan');
        }else{
          return redirect('pendaftaran.main-pendaftaran')->with('error','Data Gagal Ditambahkan');
        }
    }
}
