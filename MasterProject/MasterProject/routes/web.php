<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Mailer\SentMessage;

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

Route::get('/tugas1', function () {
    return view('tugas1');
});

Route::get("/tugas-pertemuan-5", function() {
    return "hello, world";
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
