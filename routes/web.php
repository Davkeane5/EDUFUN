<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WriterController;
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/categories', function () {
    return view('categories');
})->name('categories');
Route::get('/article/{slug}', [CategoryController::class, 'articleDetail'])->name('article.detail');
Route::get('/writer', function () {
    return view('writer'); 
})->name('writer');
Route::get('/about-us', function () {
    return view('aboutus'); 
})->name('aboutus');


