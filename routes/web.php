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

Route::get('/', function () {
    return view('welcome');
});


Route::get('bagian-apre', '\App\Http\Controllers\BagianApreController@index');
Route::get('barang-apre', '\App\Http\Controllers\BarangApreController@index');
Route::get('pengeluaran-apre', '\App\Http\Controllers\PengeluaranApreController@index');
Route::get('pengeluaranitem-apre', '\App\Http\Controllers\PengeluaranItemApreController@index');
Route::get('petugas-apre', '\App\Http\Controllers\PetugasApreController@index');
