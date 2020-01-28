<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function pertambahan($a = 0 , $b = 0)
    {
        $c = $a + $b ;
        return "$a + $b = ".$c;
    }

    public function pengurangan($a = 0 , $b = 0)
    {
        $c = $a - $b ;
        return "$a - $b = ".$c;
    }

    public function pembagian($a = 0 , $b = 0)
    {
        $c = $a / $b ;
        return "$a / $b = ".$c;
    }

    public function perkalian($a = 0 , $b = 0)
    {
        $c = $a * $b ;
        return "$a * $b = ".$c;
    }

    public function tambah($a = 0 , $b = 0)
    {
       $str = $a+$b;
       $plus=$a+$b;
       if(isset($a)){
           $str =$a.'+';
       }
       if(isset($b)) {
           $str .= $b .'=' .$plus;
       }
       return $str;
    }
    
    public function loop()
    {
        $data = [
            ['Nama'=>'Hari','Kelas'=>'RPL 1','Uang_jajan'=>'50000'],
            ['Nama'=>'Memet','Kelas'=>'RPL 1','Uang_jajan'=>'36000'],
            ['Nama'=>'Restu','Kelas'=>'RPL 1','Uang_jajan'=>'25000'],
            ['Nama'=>'David','Kelas'=>'RPL 1','Uang_jajan'=>'60000'],
            ['Nama'=>'Ujang','Kelas'=>'RPL 1','Uang_jajan'=>'15000'],
        ];
        // dd($data);
        foreach($data as $val => $key)
        {
            if ($key['Uang_jajan']>=50000) {
                $ta=$key['Uang_jajan']*25/100;
                $total=$key['Uang_jajan']-$ta;
            }
            elseif ($key['Uang_jajan']>=25000) {
                $ta=$key['Uang_jajan']*15/100;
                $total=$key['Uang_jajan']-$ta;
            }
            elseif ($key['Uang_jajan']>=10000) {
                $ta=$key['Uang_jajan']*10/100;
                $total=$key['Uang_jajan']-$ta;
            }
            else{
                $ta=0;
                $total=$key['Uang_jajan'];
            }
            echo "Nama         :". $key['Nama'].
                 "- Kelas      :". $key['Kelas'].
                 "- Uang Jajan :". $key['Uang_jajan'].
                 "- Tabungan :". $ta.
                 "- Uang Total :". $total.
                 "<hr>";
        }
    }


    public function karyawan()
    {
        $data = [
            ['Nama'=>'Rizki','Agama'=>'Islam','Alamat'=>'Jln.Cisirung','Jns_kelamin'=>'Laki-Laki','Jabatan'=>'Manager','Jam_Kerja'=>'250'],
            ['Nama'=>'Yoga','Agama'=>'Islam','Alamat'=>'Jln.Cibogo','Jns_kelamin'=>'Laki-Laki','Jabatan'=>'Sekretaris','Jam_Kerja'=>'200'],
            ['Nama'=>'Arik','Agama'=>'Islam','Alamat'=>'Jln.Cangkuang','Jns_kelamin'=>'Laki-Laki','Jabatan'=>'Staf','Jam_Kerja'=>'150'],
           
        ];
        // dd($data);
        foreach($data as $val => $key)
        {
            if ($key['Uang_jajan']>=50000) {
                $ta=$key['Uang_jajan']*25/100;
                $total=$key['Uang_jajan']-$ta;
            }
            elseif ($key['Uang_jajan']>=25000) {
                $ta=$key['Uang_jajan']*15/100;
                $total=$key['Uang_jajan']-$ta;
            }
            elseif ($key['Uang_jajan']>=10000) {
                $ta=$key['Uang_jajan']*10/100;
                $total=$key['Uang_jajan']-$ta;
            }
            else{
                $ta=0;
                $total=$key['Uang_jajan'];
            }
            echo "Nama         :". $key['Nama'].
                 "- Kelas      :". $key['Kelas'].
                 "- Uang Jajan :". $key['Uang_jajan'].
                 "- Tabungan :". $ta.
                 "- Uang Total :". $total.
                 "<hr>";
        }
    }



}
