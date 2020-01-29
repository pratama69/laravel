<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;

class TabunganController extends Controller
{
    
    public function index()
    {
        $tabungan = \App\Tabungan::all();
        return $tabungan;
    }

    public function show($id)
    {
        $tabungan = \App\Tabungan::find($id);
        return $tabungan;
    }

    public function store($id,$nis=null, $nama=null, $kelas=null, $jml=null)
    {
        $tabungan = new Tabungan();
        $tabungan->nis = $nis;
        $tabungan->nama = $nama;
        $tabungan->kelas = $kelas;
        $tabungan->jml = $jml;
        $tabungan->save();
        return $tabungan;
    }

    public function edit($id,$nis=null, $nama=null, $kelas=null, $jml=null)
    {
        $tabungan = Tabungan::find($id);
        $tabungan->nis = $nis;
        $tabungan->nama = $nama;
        $tabungan->kelas = $kelas;
        $tabungan->jml = $jml;
        $tabungan->save();
        return $tabungan;
    }

    public function delete($id)
    {
        $tabungan = \App\Tabungan::find($id);
        $tabungan->delete();
        return $tabungan;
    }
}
