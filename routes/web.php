<?php

use App\Http\Controllers\ProductIterasiController;
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

Route::get('/home ', function () {
    return view('catalog.home');
});





















































































Route::get('/ProductIterasi ', function () {
    return view('catalog.product-iterasi');
});



//Route::get('/ProductIterasi', 'ProductiterasimodelController@index');
