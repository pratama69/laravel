<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route Basic
Route::get('halo',function()
{
    return 'Halo Ini Aplikasi Laravel Pertama Saya'.
           'Laravel is Magical Framework';
});

Route::get('about',function()
{
    return '<h1>Halo</h1>'
           .'Selamat datang di webapp saya<br>'
           .'Laravel, emang keren';
});

Route::get('profil/nanda',function()
{
    return 'Hallo Nama Saya Nanda'.
           'Kelas XI RPL 1'.
           'Alamat Cibogo Indah'.
           'Umur 16 tahun'.
           'Sekolah SMK Assalaam';

});

Route::get('profil/nanda',function()
{
    return 'Hallo Nama Saya Nanda<br>'.
           'Kelas XI RPL 1<br>'.
           'Alamat Cibogo Indah<br>'.
           'Umur 16 tahun<br>'.
           'Sekolah SMK Assalaam';

});

// Route Parameter
Route::get('biodata/{nanda}',function($a)
{
    return 'Halo Ini Biodata '.$a;
});

Route::get('biodata/{nama}/{alamat}/{sekolah}/{umur}',function($a,$b,$c,$d)
{
    return 'Halo Ini Biodata '.$a .
           '<br>Alamat Saya ' .$b .
           '<br>Sekolah Saya '  .$c .
           '<br>Umur Saya ' .$d;
           
});

Route::get('pesan/{a?}/{b?}/{c?}',function($mkn=null, $minum=null, $harga=null){
    if(isset($mkn)){
        $mkn = "Anda Memesan $mkn";
        echo $mkn;
    }
    if(isset($minum)){
        $minum = " & $minum";
        echo "$minum<br>";
        echo "->25000 Size Medium<br>";
        echo "->35000 Size Lerge<br>";
        echo "->35000 Small<br>";
    }
    if(isset($harga)){
        $harga = " dengan harga<br>  $harga";
        echo $harga;
    }
   
    if($harga == 25000) {
        echo "Anda Memesan Pizza Dengan Harga Medium<br>";
    }
    if($harga == 35000) {
        echo "Anda Memesan Jus Dengan Harga Lerge<br>";
    }
    if($harga < 25000) {
        echo "Anda Memesan Thaitea Dengan Harga Small<br>";
    }
   
    if(!$mkn && !$minum) {
        return "Anda Belum Memesan Sesuatu";
        }
});

Route::get('tni/{a?}/{b?}/{c?}',function($nama=null, $bb=null, $umur=null)
{
    if(isset($nama)){
        $nama = "Nama Anda $nama";
        echo "$nama<br>";
    }

    if(isset($bb)){
        $bb = "Berat Badan Anda $bb";
        echo "$bb<br>";
    }

    if($bb >= 76 && $bb <= 100){
        echo "Anda Harus Turun Berat Badan<br>";
    }

    else if($bb >= 65 && $bb <= 75){
        echo "Anda Harus Turunkan Berat Badan<br>";
    }

    else if($bb >= 50 && $bb <= 64){
        echo "Berat Badan Anda Ideal<br>";
    }

    else if($bb < 50){
        echo "Anda Kurang Nutrisi<br>";
    }

    else if(isset($umur)){
        $umur = "Umur Anda $umur";
        echo "$umur<br>";
    }

    else if($umur >= 30 && $umur <= 40 ){
        echo "Maaf Umur Anda Tidak Valid<br>";
    }

    else if($umur >= 40 && $umur <= 50 ){
        echo "Jabatan Kerja Anda Jendral<br>";
    }

    else if($umur >= 50 && $umur <= 60 ){
        echo "Jabatan Kerja Anda Laksamana<br>";
    }
    
    elseif($umur >= 40){
        echo "Jabatan Kerja Anda Perwira<br>";
    }



    if(!$nama && !$bb) {
        return "Silahkan Isi Data Terlebih Dahulu";
    
  }
  
});

// Akses Model Post
Route::get('testmodel',function()
{
    $query = App\post::all();
    return $query;
});

// Akses Model Post
Route::get('testmodel/2',function()
{
    $query = App\post::find(1);
    return $query;
});


// Akses model biodata
Route::get('model/bio',function()
{
    $query = App\Data::all()->take(3);return $query;
});
// Akses melihat 1 record 3 fiels
Route::get('lihat-bio/select',function()
{
    $query = App\Data::select('nama','alamat','hobi')->first();
    return $query;
});

// Akses menambah record
Route::get('tambah-data/tambah/{nis}/{nama}/{tgl_lahir}/{alamat}/{sekolah}/{hobi}/{umur}',
        function($nis,$nama,$tgl_lahir,$alamat,$sekolah,$hobi,$umur){
            $post = new App\Data;
            $post -> nis=$nis;
            $post -> nama=$nama;
            $post -> nis=$nis;

});

Route::get('latihan1/{a?}/{b?}','LatihanController@pertambahan');
Route::get('latihan2/{a?}/{b?}','LatihanController@pengurangan');
Route::get('latihan3/{a?}/{b?}','LatihanController@pembagian');
Route::get('latihan4/{a?}/{b?}','LatihanController@perkalian');
Route::get('latihan5/{a?}/{b?}','LatihanController@tambah');
Route::get('/data-1','LatihanController@karyawan');

// CRUD TABUNGAN
Route::get('tabungan','TabunganController@index');
Route::get('tabungan/{id}','TabunganController@show');
Route::get('tabungan-tambah/{id}/{nis}/{nama}/{kelas}/{jml}','TabunganController@store');
Route::get('tabungan-update/{id}/{nis}/{nama}/{kelas}/{jml}','TabunganController@edit');
Route::get('tabungan-hapus/{id}','TabunganController@delete');

// CRUD CUSTOMER
Route::get('customer','CustomerController@index');
Route::get('customer/{id}','CustomerController@show');
Route::get('customer-input/{code}/{nama}/{email}/{country}/{city}/{address}/{contact}','CustomerController@store');
Route::get('customer-edit/{id}/{code}/{nama}/{email}/{country}/{city}/{address}/{contact}','CustomerController@edit');
Route::get('customer-hapus/{id}','CustomerController@delete');

// Passing Data
Route::get('pass','PracticeController@pass');
Route::get('pass1','PracticeController@pass1');
Route::get('pass-tabungan','PracticeController@pass2');
Route::get('pass-tabungan/{id}','PracticeController@pass3');
Route::get('siswa','SekolahController@daftar');
Route::get('siswa1/{id}','SekolahController@sekolah');
