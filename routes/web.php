<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa/{param1}',[MahasiswaController::class,'show']);

Route::get('/nama/{param1?}', function ($param1 = ' ') {
    return 'Nama saya: '.$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});

Route::get('/namalengkap/{param1?}/{param2?}', function ($param1 = '', $param2 = '') {
    return 'Nama saya: '.$param1.  '<br>NIM : ' .$param2;
});

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/home', [HomeController::class,'index']);
