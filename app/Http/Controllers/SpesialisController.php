<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

class SpesialisController extends Controller
{
    public function index()
    {
        $data['spesialis'] = \App\Spesialis::get();
        return view('spesialis.home-spesialis', $data);
    }

    public function store(Request $request)
    {
        $rule = [
            'nama_spesialis' => 'Required|string'
        ];
        $this->validate($request, $rule);

        $input = $request->all();

        $spesialis = new \App\Spesialis;
        $spesialis->nama_spesialis = $input['nama_spesialis'];
        $status = $spesialis->save();

        if ($status) {
            Alert::success('data berhasil di tambahkan!');
            return redirect('data-spesialis');
        } else {
            return redirect('data-spesialis')->with('berhasil');
        }
    }

    public function update(Request $request)
    {
        $rule = [
            'nama_spesialis' => 'Required|string'
        ];
        $this->validate($request, $rule);

        $input = $request->all();
        $id = $input['id_spesialis'];
        $spesialis = \App\Spesialis::find($id);
        $spesialis->nama_spesialis = $input['nama_spesialis'];
        $status = $spesialis->update();

        if ($status) {
            Alert::success('data berhasil di edit!');
            return redirect('data-spesialis')->with('berhasil');
        } else {
            return redirect('data-spesialis')->with('gagal');
        }
    }

    public function destroy(Request $request)
    {
        $input = $request->all();
        $id = $input['id_spesialis'];

        $spesialis = \App\Spesialis::find($id);
        $status = $spesialis->delete();

        if ($status) {
            Alert::success('data berhasil di hapus!');
            return redirect('data-spesialis')->with('berhasil');
        } else {
            return redirect('data-spesialis')->with('gagal');
        }
    }
}
