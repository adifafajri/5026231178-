<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Coba;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/selamat', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com<h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('/hello', [Coba::class, 'helloWorld']);
Route::get('/hello', 'App\Http\Controllers\Coba@helloWolrd');

// Pertemuan 1
Route::get('/pertemuan1', function () {
    return view('pertemuan1');
});

// Latihan Pertemuan 1
Route::get('/latihanpertemuan1', function () {
    return view('latihanpertemuan1');
});

// Pertemuan 3 Bootstrap
Route::get('/bootstrap2pertemuan3', function () {
    return view('bootstrap2pertemuan3');
});

// Pertemuan 4 Latihan Bootstrap
Route::get('/bootstraplatihanpertemuan4', function () {
    return view('bootstraplatihanpertemuan4');
});

// Pertemuan 5 Bootstrap Linktre
Route::get('/bootstraplinktreepertemuan5', function () {
    return view('bootstraplinktreepertemuan5');
});


// Pertemuan 7 Latihan Bootstrap
Route::get('/js1pertemuan7', function () {
    return view('js1pertemuan7');
});

// Pertemuan 7 Latihan Bootstrap
Route::get('/js2pertemuan7', function () {
    return view('js2pertemuan7');
});

// Pertemuan 8 Danantara
Route::get('/danantarapertemuan8', function () {
    return view('danantarapertemuan8');
});

// Pertemuan 9 ETS
Route::get('/etspertemuan9', function () {
    return view('etspertemuan9');
});


Route::get('dosen',
    [Coba::class, 'index']
);

Route::get('/pegawai/{nama}',
    [PegawaiController::class, 'index']
);

// Halaman isian formulir
Route::get('/formulir',
    [PegawaiController::class, 'formulir']
);
Route::post('/formulir/proses',
    [PegawaiController::class, 'proses']
);

Route::get('/blok',
    [BlogController::class, 'home']
);
Route::get('/blok/tentang',
    [BlogController::class, 'tentang']
);

Route::get('/blok/kontak',
    [BlogController::class, 'kontak']
);
