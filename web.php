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

Route::get('/home', function () {
    return ('Halaman Home');
});

Route::get('/about', function () {
    return ('Halaman About');
});

Route::get('/blog', function () {
    return ('Halaman Blog');
});

route::get('/sohriel', function () {
    return ('Sohriel');
});

route::get('/delevann', function () {
    return ('Delevann');
});

route::get('/', function () {
    return('Delevann and Sohriel Pradis, Both born in 15th of April in an unknown year. 
    Delevann, well known as "Delphyros" is active in gaming community and rather not talk in real live (if he dont like the topic).
    Sohriel, or "Sohlarois" however, is super chatty and is often called as the sunshine of any group of friends.');
});

Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang Belajar Laravel</p>';
});

Route::get('/siswa/smkbpi/rpl', function() {
    echo '<h2 style="text-align : center"><u>Welcome to 11 RPL</u></h2>';
});

Route::get('/siswa/{mayaka}', function($mayaka) {
    return"Tampilkan data siswa bernama $mayaka";
});

route::get('/stok_barang/tablet/samsung', function($jenis, $merek) {
    return "cek sisa stok untuk tablet samsung";
});

route::get('/profile', function() {
    return view('profile');
});