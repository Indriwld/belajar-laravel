<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {

// return view('welcome');
//});

//Route::get('hal2', function () {
//  return "<h1>Selamat Datang Dihalaman Kedua</h1>";
//});

//Route::get('biodata', function () {
//    $nama = "Indri wulandari";
//   $jeniskelamin = "Permpuan";
//   $tempatlahir = "Bandung";
//   $tanggallahir = "07 november 2003";
//   $alamat = "Cilebak";
//   $agama = "Islam";
//  $hobi = "Makan";

//    return "Nama :" . $nama . "<br>
//            Jeniskelamin :" . $jeniskelamin . "<br>
//            Tempat lahir :" . $tempatlahir . "<br>
//          Tanggal lahir :" . $tanggallahir . "<br>
//          Alamat :" . $alamat . "<br>
//           Agama :" . $agama . "<br>
//            Hobi :" . $hobi . "<br>";
//});
//Route::get('biodata2', function () {
//  $nama = "Indri wulandari";
//  $jeniskelamin = "Permpuan";
// $tempatlahir = "Bandung";
// $tanggallahir = "07 november 2003";
//  $alamat = "Cilebak";
// $agama = "Islam";
//  $hobi = "Makan";

//  return view('biodata', compact('nama', 'jeniskelamin', 'tempatlahir', 'tanggallahir', 'alamat', 'agama', 'hobi'));

//});
//Route::get('/input/{nama}/{jeniskelamin}/{tampatlahir}/{tanggallahir}/{alamat}/{agama}/{hobi}', function ($nama, $jeniskelamin, $tempatlahir, $tanggallahir, $alamat, $agama, $hobi) {
//    echo "Nama saya : " . $nama;
//    echo "<br>jenis kelamin : " . $jeniskelamin;
//    echo "<br>tempat lahir : " . $tempatlahir;
//   echo "<br>tanggal lahir : " . $tanggallahir;
//   echo "<br>alamat : " . $alamat;
//   echo "<br>agama : " . $agama;
///   echo "<br>hobi : " . $hobi;

//});
Route::get('blog', function () {
    $data = [
        ['id' => 1, 'title' => 'Lorem ipsum 1', 'content' => 'Content Pertama'],
        ['id' => 2, 'title' => 'Lorem ipsum 2', 'content' => 'Content Kedua'],
        ['id' => 3, 'title' => 'Lorem ipsum 3', 'content' => 'Content Ketiga'],
    ];
    //dd($data);
    return view('blog', compact('data'));
});
