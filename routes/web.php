<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GenericController;
use Illuminate\Support\Facades\Route;


// Rotta Homepage
Route::get('/',[GenericController::class, 'homepage'])->name('home');

// Rotta index
Route::get('/index',[ArticleController::class, 'index'])->name('index');

// Rotta create articles
Route::get('/create', [ArticleController::class, 'create'])->name('create');
Route::post('/submit', [ArticleController::class, 'store'])->name('submit');

// Rotta show
Route::get('/detail/{article}', [ArticleController::class, 'show'])->name('detail');

// Rotte Edit
Route::get('/edit/{article}',[ArticleController::class ,'edit'])->name('edit');
Route::put('/update/{article}',[ArticleController::class, 'update'])->name('update');

// Rotte delete
Route::delete('/delete/{article}',[ArticleController::class,'destroy'])->name('delete');