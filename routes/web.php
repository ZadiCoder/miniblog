<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth'])->group(function(){
    Route::get('/post',[PostController::class,'index'])->name('post_index');
    Route::post('/post',[PostController::class,'create'])->name('post_create');
    Route::get('/dashboard',[DashboardController::class,'show_post'])->name('dashboard');

});

require __DIR__.'/auth.php';
