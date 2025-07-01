<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('latihan-mandiri', function () {
    return view('testing', ['src' => [
        'assets/images/g1.jpg',
        'assets/images/g2.png',
        'assets/images/g3.jpg',
        'assets/images/g4.jpg',
    ],
    'message' => 'Selamat datang di Laravel',
    ]);
});

Route::get('/tgs', function () {
    return view('tugas');
});

Route::get('/tugas-pertemuan-5', function () {
    return 'hello, world';
});

Route::get('6', function() {
    return view('pertemuan6');
});

Route::get('5', function() {
    return view('pertemuan5');
});

Route::get('5', function() {
    return view('pertemuan5');
});

Route::get('/lat4', function () {
    return view('latihan4');
Route::get('/tugas-pertemuan-5', function () {
    return 'hello, world';
});

Route::get('/4', function () {
    return view('pertemuan4');
});

Route::get('/lat3', function () {
    return view('latihan3');
});

Route::get('/lat3', function () {
    return view('latihan3');
});

Route::get('/arief-darmawan.com', function () {
    return view('arief');
});

Route::get('/unama.ac.id', function () {
    return view('unama');
});

Route::get('/latihan', function () {
    return view('latihan');
});

Route::get('/3', function () {
    return view('pertemuan3');
});

Route::get('/2', function () {
    return view('pertemuan2');
});

Route::get('/1', function () {
    return view('pertemuan1');
});

Route::get('/about', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
