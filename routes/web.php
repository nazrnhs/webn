<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryFullController;
use App\Http\Controllers\BlogFullController;


use Illuminate\Support\Facades\Route;




//
//Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
//Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
//Route::get('/categories/create', [CategoryController::class , 'create'])->name('categories.create');
//Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
//Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
//Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
//Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

//Route::resource('categories' , CategoryController::class);

Route::resource('categories', CategoryFullController::class);

Route::resource('blogs', BlogFullController::class);


