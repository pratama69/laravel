<?php

use Illuminate\Database\Seeder;

class SekolahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sekolah = [
            ['nis'=>'12345','nama'=>'Nanda Julia Pratama','kelas'=>'XI RPL','alamat'=>'Cibogo Indah','jns_kel'=>'Perempuan','tgl_lahir'=>'2003-07-13','umur'=>'16'],
            ['nis'=>'12346','nama'=>'Elsa Putri Anatasya','kelas'=>'X RPL','alamat'=>'Cibogo Indah','jns_kel'=>'Perempuan','tgl_lahir'=>'2004-04-17','umur'=>'15'],
            ['nis'=>'12346','nama'=>'Viona','kelas'=>'XII RPL','alamat'=>'Cibogo Indah','jns_kel'=>'Perempuan','tgl_lahir'=>'2003-06-15','umur'=>'17'],
        ];

         // masukkan data ke database
         DB::table('sekolahs')->insert($sekolah);
    }
}
