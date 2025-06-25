<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GenericController;
use Illuminate\Support\Facades\Route;


// Rotta Homepage
Route::get('/',[GenericController::class, 'homepage'])->name('home');

// Rotta index
Route::get('/index',[ArticleController::class, 'index'])->name('index');

// Rotta create articles
Route::get('/create', [ArticleController::class, 'create'])->name('create')->middleware('auth');
Route::post('/submit', [ArticleController::class, 'store'])->name('submit')->middleware('auth');

// Rotta show
Route::get('/detail/{article}', [ArticleController::class, 'show'])->name('detail');

// Rotte Edit
Route::get('/edit/{article}',[ArticleController::class ,'edit'])->name('edit')->middleware('auth');
Route::put('/update/{article}',[ArticleController::class, 'update'])->name('update')->middleware('auth');

// Rotte delete
Route::delete('/delete/{article}',[ArticleController::class,'destroy'])->name('delete')->middleware('auth');