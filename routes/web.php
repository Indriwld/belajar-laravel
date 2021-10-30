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
//Route::get('blog', function () {
// $data = [
//   ['id' => 1, 'title' => 'Lorem ipsum 1', 'content' => 'Content Pertama'],
//    ['id' => 2, 'title' => 'Lorem ipsum 2', 'content' => 'Content Kedua'],
//     ['id' => 3, 'title' => 'Lorem ipsum 3', 'content' => 'Content Ketiga'],
// ];
//dd($data);
// return view('blog', compact('data'));
//});

//Route::get('absen', function () {
//  $data = [
//     ['NIS' => 1, 'Nama' => 'alya nulia', 'Jenis kelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Bandung'],
//     ['NIS' => 2, 'Nama' => 'anggi fitria', 'Jenis kelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Bandung'],
//     ['NIS' => 3, 'Nama' => 'anisa andriani', 'Jenis kelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Bandung'],
//     ['NIS' => 4, 'Nama' => 'arif muhammad iqbal', 'Jenis kelamin' => 'Laki-Laki', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Bandung'],
//     ['NIS' => 5, 'Nama' => 'astri pitriana', 'Jenis kelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Bandung'],
//     ['NIS' => 6, 'Nama' => 'azhar aulia', 'Jenis kelamin' => 'Laki-Laki', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Bandung'],
//      ['NIS' => 4, 'Nama' => 'aziz tubagus taufik hirzi', 'Jenis kelamin' => 'Laki-Laki', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Bandung'],
//      ['NIS' => 8, 'Nama' => 'bima putra r', 'Jenis kelamin' => 'Laki-Laki', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Bandung'],
//     ['NIS' => 9, 'Nama' => 'cindi nurul', 'Jenis kelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Bandung'],
//     ['NIS' => 10, 'Nama' => 'dinda dwiokta', 'Jenis kelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Bandung'],
//   ];
//dd($data);
//  return view('absen', compact('data'));
//});

// Route::get('siswa', function () {
//     $siswas = [
//         ['id' => 1,
//             'nama' => 'indriwld',
//             'username' => 'indriwld',
//             'email' => 'indriwld@gmail.com',
//             'alamat' => 'Bandung',
//             'mapel' => [
//                 'mapel1' => 'Bahasa Indonesia',
//                 'mapel2' => 'Bahasa Inggris',
//                 'mapel3' => 'Bahasa Jepang',
//                 'mapel' => 'Bahasa Belanda',
//             ],
//         ],
//     ];
//     return view('siswa', compact('siswas'));
// });

// Route::get('/input/{nama?}/{kelas?}', function ($nama, $kelas = "12 RPL 3") {
//     echo "Nama saya : " . $nama;
//     echo "<br>";
//     echo "kelas : " . $kelas;

// });
// Route::get('/input/{nama?}/{indo?}/{ing?}/{mtk?}/{pro?}', function ($nama = null, $indo = 95, $ing = 85, $mtk = 90, $pro = 100) {
//     echo "Nama : " . $nama . "<br>";
//     echo "Nilai Bahasa Indonesia : " . $indo . "<br>";
//     echo "Nilai Bahasa Inggris : " . $ing . "<br>";
//     echo "Nilai Matematika : " . $mtk . "<br>";
//     echo "Nilai Produktif : " . $pro . "<br>";
//     $rata = ($indo + $ing + $mtk + $pro) / 4;
//     echo "Rata-rata : " . $rata . "<br>";
//     echo "Grade : ";
//     if ($rata >= 90) {
//         echo "A";
//     } elseif ($rata >= 80) {
//         echo "B";
//     } elseif ($rata >= 70) {
//         echo "C";
//     } else {
//         echo "D";
//     }
// });
Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}', function ($makanan = null, $minuman = null, $cemilan = null) {

    if ($makanan && $minuman && $cemilan != null) {
        return "Anda pesan Makanan = $makanan <br>
                Anda pesan Minuman = $minuman <br>
                Anda pesan Cemilan = $cemilan";

    } else if ($makanan && $minuman != null) {
        return "Anda pesan Makanan = $makanan <br>
                Anda pesan Minuman = $minuman";

    } else if ($makanan || $minuman != null) {
        return $makanan != null ? "Anda pesan makanan : $makanan" : "Anda pesan minuman : $minuman";
    } else {
        return "Anda tidak memesan silahkan pulang";
    }
});
