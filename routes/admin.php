<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use Illuminate\Support\Facades\Route;



Route::get('/', [AdminController::class , 'index'])->name('index');
Route::get('/blogs', [BlogController::class , 'index'])->name('blog.index');
Route::get('/blogs/create', [BlogController::class , 'create'])->name('blog.create');
Route::post('/blogs', [BlogController::class , 'store'])->name('blog.store');
Route::get('/blogs/{id}', [BlogController::class , 'show'])->name('blog.show');
Route::delete('/blogs/{id}', [BlogController::class , 'destroy'])->name('blog.destroy');
