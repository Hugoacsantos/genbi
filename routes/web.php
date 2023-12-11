<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::prefix('user')->group(function(){
    Route::get('/',[UserController::class,'index'])->name('user_home');
    Route::get('/cadastro',[UserController::class,'cadastro'])->name('user_cadastro');
    Route::get('/search',[UserController::class,'search'])->name('user_search');
    Route::get('/details/{id}',[UserController::class,'details'])->name('user_details');
    Route::get('/edit/{id}',[UserController::class,'edit']);
    Route::get('/{id}',[UserController::class,'find']);
    Route::post('/create',[UserController::class,'create'])->name('user_create');
    Route::delete('/{id}',[UserController::class,'delete'])->name('user_delete');
});


Route::prefix('book')->group(function(){
    Route::get('/',[BookController::class,'index'])->name('user_home');
    Route::get('/cadastro',[UserController::class,'cadastro'])->name('user_cadastro');
    Route::get('/search',[UserController::class,'search'])->name('user_search');
    Route::get('/details/{id}',[UserController::class,'details'])->name('user_details');
    Route::get('/edit/{id}',[UserController::class,'edit']);
    Route::get('/{id}',[UserController::class,'find']);
    Route::post('/create',[UserController::class,'create'])->name('user_create');
    Route::delete('/{id}',[UserController::class,'delete'])->name('user_delete');
});
