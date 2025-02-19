<?php

use App\Http\Controllers\Frontend\DetailController;
use App\Http\Controllers\Frontend\ResultController;
use App\Http\Controllers\Frontend\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/upload',[UploadController::class, 'index'])->name('upload.index');
Route::post('/upload',[UploadController::class, 'upload'])->name('upload.file');
Route::get('/results',[ResultController::class, 'index'])->name('result.index');
Route::get('/detail/{id}',[DetailController::class, 'index'])->where('id', '.*')->name('detail.index');
