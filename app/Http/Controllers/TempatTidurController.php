<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gedung;
use App\Ruangan;
use App\TempatTidur;
use Alert;

class TempatTidurController extends Controller
{
    public function index()
    {
        $no = 1;
        $tempat = \DB::table('t_tmpt_tidur')
            ->join('t_ruangan', 't_tmpt_tidur.id_ruangan', '=', 't_ruangan.id')
            ->select('t_tmpt_tidur.*', 't_ruangan.nama_ruangan')
            ->get();
        $ruangan = Ruangan::get();
        $gedung = Gedung::get();
        $waktu = rand(0, 9999);
        $gedung = Gedung::get();
        return view('tempat-tidur.main-tempat-tidur', ['tempat' => $tempat, 'no' => $no, 'gedung' => $gedung, 'ruangan' => $ruangan, 'waktu' => $waktu]);
    }

    public function input()
    {
        $data['gedung'] = Gedung::get();
        $data['ruangan'] = Ruangan::get();
        $data['ranjang'] = TempatTidur::select('kode')->first();
        $data['waktu'] = rand(0, 9999);
        return view('tempat-tidur.form-tempat-tidur', $data);
    }

    public function store(Request $request)
    {
        $status = $request->all();
        if (TempatTidur::where('kode', $status['kode'])->first() != null) {
            $status['kode'] = 'RS ' . rand(0, 9999);
        }

        $ranjang = new TempatTidur;
        $ranjang->kode = $status['kode'];
        $ranjang->id_ruangan = $status['nama_ruangan'];

        $ranjang->status = "0";

        $status = $ranjang->save();

        if ($status) {
            Alert::success('Data Berhasil Di Tambahkan');
            return redirect('/main-tempat-tidur')->with('success');
        } else {
            Alert::error('Data Gagal Di Tambahkan');
            return redirect('/main-tempat-tidur')->with('Error');
        }
    }

    public function destroy(Request $request)
    {
        $input = $request->all();

        $id = $input['id'];
        $ranjang = \App\TempatTidur::findOrFail($id);
        $status =  $ranjang->delete();

        if ($status) {
            Alert::success('Data Berhasil Di Hapus');
            return redirect('/main-tempat-tidur')->with('success');
        } else {
            Alert::error('Data Gagal Di Hapus');
            return redirect('/main-tempat-tidur')->wirh('Error');
        }
    }
}
