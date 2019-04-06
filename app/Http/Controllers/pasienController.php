<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pasienController extends Controller
{
    public function index(){
      $data['pasien'] = \DB::table('t_pasien')
      ->get();
      return view('pasien.main-pasien',$data);
    }

    public function input(){
      return view('pasien.form-pasien');
    }

    public function store(Request $request)
    {
      $input = $request->all();
      unset ($input['_token']);
      $status = \DB::table('t_pasien')->insert($input);

      if ($status) {
        return redirect('/pasien')->with('success', 'Data Berhasil ditambahkan');
      } else {
        return redirect('/pasien/input')->with('error','Data gagal ditambahkan');
      }
    }
}
