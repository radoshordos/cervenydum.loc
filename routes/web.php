<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AktualityController;
use App\Http\Controllers\CandidatesController;
use App\Http\Controllers\BytyController;
use App\Http\Controllers\SouvisejiciProjektyController;

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


Route::resource('/', AktualityController::class)->names('aktuality')->only(['index']);
Route::resource('/byty', BytyController::class)->names('byty')->only(['index']);
Route::resource('/souvisejici-projekty', SouvisejiciProjektyController::class)->names('souvisejici')->only(['index']);
Route::resource('/pro-zajemce', CandidatesController::class)->names('zajemci')->only(['index', 'store']);
