<?php

use Illuminate\Support\Facades\Route;
use App\Models\Kategori;
use App\Models\Lokasi;
use App\Models\Event;

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

Route::get('/testkategori', function () {
    $kategori = Kategori::all();

    return view('tampil_kategori', compact('kategori'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\KategoriController;
Route::resource('kategori', KategoriController::class);

use App\Http\Controllers\LokasiController;
Route::resource('lokasi', LokasiController::class);

use App\Http\Controllers\EventController;
Route::resource('event', EventController::class);

use App\Http\Controllers\WisataController;
Route::resource('wisata', WisataController::class);
