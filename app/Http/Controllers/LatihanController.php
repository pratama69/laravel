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
            ['nama'=>'Rizki','agama'=>'Islam','alamat'=>'Jln.Cisirung','jns_kel'=>'Laki-Laki','jabatan'=>'Manager','jamker'=>'350'],
            ['nama'=>'Yoga','agama'=>'Islam','alamat'=>'Jln.Cibogo','jns_kel'=>'Laki-Laki','jabatan'=>'Sekretaris','jamker'=>'250'],
            ['nama'=>'Arik','agama'=>'Islam','alamat'=>'Jln.Cangkuang','jns_kel'=>'Laki-Laki','jabatan'=>'Staf','jamker'=>'200'],
           
        ];
        // dd($data);
        foreach ($data as $val => $key) {
            echo 'Nama : '.$key['nama'].'<br>'.
                'Agama : '.$key['agama'].'<br>'.
                'Alamat : '.$key['alamat'].'<br>'.
                'Jenis Kelamin : '.$key['jns_kel'].'<br>'.
                'Jabatan : '.$key['jabatan'].'<br>'.
                'Jam Kerja : '.$key['jamker'].'<br>';
            if ($key['jabatan'] == "Manager") {
                $gaji = 5000000;
                echo 'Gaji : Rp. '.$gaji.'<br>';
            }
            elseif ($key['jabatan'] == "Sekretaris") {
                $gaji = 3500000;
                echo 'Gaji : Rp. '.$gaji.'<br>';
            }
            elseif ($key['jabatan'] == "Staff") {
                $gaji = 2500000;
                echo 'Gaji : Rp. '.$gaji.'<br>';
            }
            if ($key['jamker'] >= 250) {
                $bonus = $gaji*10/100;
                echo 'Bonus : '.$bonus.'<br>';
            }
            elseif ($key['jamker'] >= 200) {
                $bonus = $gaji*5/100;
                echo 'Bonus : '.$bonus.'<br>';
            }
            $gaber = $gaji+$bonus;
            $ppn = $gaber*2.5/100;
            echo 'PPN : Rp. '.$ppn.'<br>';
            $gatot = $gaber - $ppn;
            echo 'Total Gaji : Rp. '.$gatot.'<hr>';
        }
    }


}
