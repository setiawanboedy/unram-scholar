<?php

use App\Http\Controllers\Frontend\DetailController;
use App\Http\Controllers\Frontend\ResultController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/results',[ResultController::class, 'index'])->name('result.index');
Route::get('/detail/{id}',[DetailController::class, 'index'])->where('id', '.*')->name('detail.index');
