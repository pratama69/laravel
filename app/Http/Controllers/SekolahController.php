<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sekolah;

class SekolahController extends Controller
{
    public function daftar()
    {
        $daftar = Sekolah::all();
        return view('sekolah',compact('daftar'));
    }

    public function sekolah($id)
    {
        $daftar = Sekolah::findOrFail($id);
        return view('sekolah',compact('daftar'));
    }
}
