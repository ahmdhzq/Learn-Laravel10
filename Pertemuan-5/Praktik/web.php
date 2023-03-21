<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\PegawaiController;

use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});


//Tambahkan route baru di routes/web.php
Route::get('/salam', function () {
    return "Assalamu'alaikum Sobat, Selamat Belajar Laravel";
});


//Tambahkan route baru di routes/web.php
Route::get('/pegawai/{nama}/{divisi}', function ($nama, $divisi) {
    return 'Nama Pegawai : ' . $nama . '<br/>Departemen : ' . $divisi;
});


//Tambahkan route baru di routes/web.php
Route::get('/kabar', function () {
    return view('kondisi');
});


Route::get(
    '/mahasiswa',
    [MahasiswaController::class, 'dataMahasiswa']
);


// Tugas Mandiri 3
Route::get(
    '/tugasm3',
    [MahasiswaController::class, 'tugasMandiri3']
);


//Tambahkan route baru di routes/web.php/Materi 4
Route::get('/hello', function () {
    return view('hello', ['name' => 'Inaya']);
});


//Tambahkan route baru di routes/web.php/Materi 4
Route::get('/nilai', function () {
    return view('nilai');
});


//Tambahkan route baru di routes/web.php
Route::get('/daftarnilai', function () {
    return view('daftar_nilai');
});


//Tambahkan route baru di routes/web.php/Materi 4
Route::get('/phpframework', function () {
    return view('layouts.index');
});
Auth::routes();


Route::get('/users/{user}', function (User $user) {
    return $user->email;
});

Route::get(
    '/pegawai',
    [PegawaiController::class, 'index']
);

//Tambahkan route baru di routes/web.php
Route::resource('pegawai', PegawaiController::class);


Route::get('/home', [HomeController::class, 'index']);
Route::get('/aboutus', [HomeController::class, 'aboutus']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');