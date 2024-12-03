<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubirImgController;

Route::get('/', [SubirImgController::class, 'showForm'])->name('upload.form');
Route::post('/upload', [SubirImgController::class, 'upload'])->name('upload.handle');
Route::get('/images', [SubirImgController::class, 'index'])->name('images.index');
Route::get('/photos', [SubirImgController::class, 'showPhotos'])->name('photos.index');
