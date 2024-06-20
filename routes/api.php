<?php

use App\Http\Controllers\CategoryApiController;
use App\Http\Controllers\CategoryFullController;
use App\Http\Controllers\BlogFullController;

use App\Http\Controllers\BlogApiController;
use App\Http\Controllers\LikeApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::name('api.')->group(function () {

//    Route::get('/categories', [CategoryApiController::class, 'index'])->name('categories.index');
//    Route::get('/categories/{id}', [CategoryApiController::class, 'show'])->name('categories.show');
//    Route::post('/categories', [CategoryApiController::class, 'store'])->name('categories.store');
//    Route::delete('/categories/{category}', [CategoryApiController::class, 'destroy'])->name('categories.destroy');
//    Route::put('/categories/{category}', [CategoryApiController::class, 'update'])->name('categories.update');


//    Route::apiResource('categories', CategoryApiController::class);
//    Route::apiResource('categories', CategoryFullController::class);


    //   Route::apiResource('blogs', BlogFullController::class);

//    Route::apiResource('blogs', BlogApiController::class);

      Route::apiResource('likes', LikeApiController::class);

});


