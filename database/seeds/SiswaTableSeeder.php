<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $Siswa = [
            ['nama'=>'Nanda Julia Pratama','nis'=>'12345','jenis_kelamin'=>'perempuan','alamat'=>'cibogo indah','tgl_lahir'=>'2003-07-13','umur'=>'16']
        ];

         // masukkan data ke database
         DB::table('Siswa')->insert($Siswa);
    }
}
