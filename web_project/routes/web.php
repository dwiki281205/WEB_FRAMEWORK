<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Route biasa
Route::get('/mahasiswa', function () {
    $mhs = ['Andi', 'Budi', 'Cici', 'Dedi', 'Eka'];
    return view('mahasiswa', ['mhs' => $mhs]);
});

Route::get('/dosen', function () {
    $dosen = ['Pak Ahmad', 'Bu Betty', 'Pak Charlie', 'Bu Dewi'];
    return view('dosen', ['dosen' => $dosen]);
});

// Named Route
Route::get('/pnp/jurusan/ti/prodi', function () {
    return view('prodi');
})->name('prodi');

// Named Route dengan Parameter
Route::get('/pnp/{jurusan}/{prodi}', function ($jurusan, $prodi) {
    return view('akademik.prodi', [
        'jurusan' => $jurusan,
        'prodi' => $prodi
    ]);
})->name('prodi.detail');

// Route untuk home
Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
});