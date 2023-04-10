<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// route adalah penghubung antara user dengan  suluruh framework dalam laravel

// Route::get('/', function () {
//     return view('welcome');
// });

//
// Route::get('/hello', function () {
//     return ('hello world!');
// });

//menampilkan halaman
// Route::get('/nama', function () {
//     return ('Muhammad Dwi Ramadhianto');
    
// });

//Contoh route view yang menampilkan
// Route::view('/', 'welcome');

//mengirim argumen ke view

//membuat route untuk mahasiswa

//mengirim argumen ke view yang ada return nya
// Route::get('/mahasiswa', function () {
//     return view('mahasiswa', ['name' =>[ 'Muhammad Dwi Ramadhianto', 'Muhammad Hari', 'Arya','asem']]);
    
// });
// Route::get('/dosen', function () {
//     return view('dosen', ['name' =>[ 'Pak Wahid', 'Pak Asrul', 'Bu Putri','Bu Alda']]);
    
// });

//Data Barangg


Route::prefix('Admin')->group(function (){

Route::get('/data_barang', function () {
    return view('data_barang', 
    ['name'=> ['pensil warna', 'buku','buku'],
    'price' => ['3.000', '5.000', '4.000']
    ]);
});
Route::get('/menu_makanan', function () {
    return view('menu_makanan', 
['name' => ['ayam','sapi','bebek'],
'price'  =>['20.000','50.000','25.000']]);
});
Route::get('/data_dosen', function () {
    return view('data_dosen',
    ['name'=>['Asrull','Sucpito','Putri'],
    'Nik' => ['2323232','14141414','21314141']]);
});


});


// Menu makanan
//Route:: view ('/menu_makanan', 'menu_makanan');

//Data Dosen
//Route:: view ('/data_dosen', 'data_dosen');