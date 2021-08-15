<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\FileUploadController;
  
  
Route::get('image-upload', [ FileUploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('image-upload', [ FileUploadController::class, 'imageUploadPost' ])->name('image.upload.post');
