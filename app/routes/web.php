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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/masuk', function () {
    echo '<h1> Selamat Anda Berhasil! </h1>';})
-> middleware('Prak3');

Route::get('/gagal', function () {
    echo '<h1> Maaf Anda gagal! </h1>';
});