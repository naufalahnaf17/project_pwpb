<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pasienController extends Controller
{
    public function index(){
      return view('pasien.main-pasien');
    }

    public function input(){
      return view('pasien.form-pasien');
    }
}
