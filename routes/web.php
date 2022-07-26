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
    return view('paper');
});

Route::get('/byty', function () {
    return view('byty');
});

Route::get('/souvisejici-projekty', function () {
    return view('souvisejici-projekty');
});

Route::get('/souvisejici-projekty', [App\Http\Controllers\SouvisejiciProjekty::class, 'index'])->name('zajemci');
Route::get('/pro-zajemce', [App\Http\Controllers\Zajemci::class, 'index'])->name('zajemci');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
