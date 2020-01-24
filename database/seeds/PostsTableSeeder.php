<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $posts = [
            ['title'=>'Tips Cepat Menikah','content'=>'lorem impus'],
            ['title'=>'Haruskah Menunda Nikah','content'=>'lorem impus'],
            ['title'=>'Membangun Visi Misi Keluarga','content'=>'lorem impus']
        ];
        // masukkan data ke database
        DB::table('Posts')->insert($posts);
    }
}
