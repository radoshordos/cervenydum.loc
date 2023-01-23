<?php

use App\Http\Controllers\AktualityController;
use App\Http\Controllers\BytyController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ProjectPartnersController;
use App\Http\Controllers\SouvisejiciProjektyController;
use Illuminate\Support\Facades\Route;


Route::resource('/', AktualityController::class)->names('aktuality')->only(['index']);
Route::resource('/byty', BytyController::class)->names('byty')->only(['index']);
Route::resource('/partneri', ProjectPartnersController::class)->names('partneri')->only(['index']);
Route::resource('/souvisejici-projekty', SouvisejiciProjektyController::class)->names('souvisejici')->only(['index']);
Route::resource('/pro-zajemce', CandidateController::class)->names('zajemci')->only(['index', 'store']);

