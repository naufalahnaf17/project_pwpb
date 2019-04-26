<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;
use Alert;

class pasienController extends Controller
{
  public function index()
  {
    $data['pasien'] = \DB::table('t_pasien')
      ->get();
<<<<<<< HEAD
    return view('pasien.main-pasien', $data);
  }
=======
      return view('pasien.main-pasien',$data);
    }

    public function input(){
      return view('pasien.form-pasien');
    }
>>>>>>> 2c44ee1d3f302643c559630b7cbe8d6679f3e290

  public function input()
  {
    $data['norm'] = 'RM' . rand(000000, 999999);
    return view('pasien.form-pasien', $data);
  }

  public function store(Request $request)
  {
    $rule = [
      'nama_pasien' => 'required|string',
      'gender' => 'required',
      'golongan_darah' => 'required',
      'tempat_lahir' => 'required|string',
      'tanggal_lahir' => 'required',
      'nama_ibu' => 'required|string',
      'status_menikah' => 'required',
    ];
    $this->validate($request, $rule);

    $input = $request->all();
    $pasien = new \App\Pasien;
    if (Pasien::where('no_rm', $input['norm'])->first() != null) {
      $input['norm'] = 'RM' . rand(000, 999999);
    }
    $pasien->no_rm = $input['norm'];
    $pasien->nama_pasien = $input['nama_pasien'];
    $pasien->gender = $input['gender'];
    $pasien->golongan_darah = $input['golongan_darah'];
    $pasien->tempat_lahir = $input['tempat_lahir'];
    $pasien->tanggal_lahir = $input['tanggal_lahir'];
    $pasien->nama_ibu = $input['nama_ibu'];
    $pasien->status_menikah = $input['status_menikah'];
    $status = $pasien->save();

    if ($status) {
      Alert::success('Data Berhasil Di Tambahkan');
      return redirect('/pasien')->with('success');
    } else {
      Alert::error('Data Gagal Di Tambahkan');
      return redirect('/pasien')->wirh('Error');
    }
  }

  public function edit(Request $request, $id)
  {
    $data['pasien'] = \DB::table('t_pasien')->find($id);
    return view('pasien.form-pasien', $data);
  }

  public function update(Request $request, $id)
  {
    $rule = [
      'nama_pasien' => 'required|string',
      'gender' => 'required',
      'golongan_darah' => 'required',
      'tempat_lahir' => 'required|string',
      'tanggal_lahir' => 'required',
      'nama_ibu' => 'required|string',
      'status_menikah' => 'required',
    ];
    $this->validate($request, $rule);
    $input = $request->all();
    $pasien = Pasien::find($id);
    $pasien->no_rm = $input['norm'];
    $pasien->nama_pasien = $input['nama_pasien'];
    $pasien->gender = $input['gender'];
    $pasien->golongan_darah = $input['golongan_darah'];
    $pasien->tempat_lahir = $input['tempat_lahir'];
    $pasien->tanggal_lahir = $input['tanggal_lahir'];
    $pasien->nama_ibu = $input['nama_ibu'];
    $pasien->status_menikah = $input['status_menikah'];
    $status = $pasien->update();

    if ($status) {
      Alert::success('Data Berhasil Di Edit');
      return redirect('/pasien')->with('success');
    } else {
      Alert::error('Data Gagal Di Edit');
      return redirect('/pasien')->wirh('Error');
    }
  }

  public function destroy(Request $request, $id)
  {
    $status = \DB::table('t_pasien')->where('id', $id)->delete();

    if ($status) {
      return redirect('/pasien')->with('success', 'Data telah dihapus');
    } else {
      return redirect('/pasien/input')->with('error', 'Data gagal dihapus');
    }
  }
}
