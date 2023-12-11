<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
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
})->name('home');


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
    Route::get('/',[BookController::class,'index'])->name('book_home');
    Route::get('/cadastro',[BookController::class,'cadastro'])->name('book_cadastro');
    Route::get('/search',[BookController::class,'search'])->name('book_search');
    Route::get('/details/{id}',[BookController::class,'details'])->name('book_details');
    Route::get('/edit/{id}',[BookController::class,'edit']);
    Route::get('/{id}',[BookController::class,'find']);
    Route::post('/create',[BookController::class,'create'])->name('book_create');
    Route::delete('/{id}',[BookController::class,'delete'])->name('book_delete');
});

Route::prefix('order')->group(function(){
    Route::get('/',[OrderController::class,'index'])->name('order_home');
    Route::get('/cadastro',[OrderController ::class,'cadastro'])->name('order_cadastro');
    Route::get('/search',[OrderController::class,'search'])->name('order_search');
    Route::get('/details/{id}',[OrderController::class,'details'])->name('order_details');
    Route::get('/edit/{id}',[OrderController::class,'edit']);
    Route::get('/{id}',[OrderController::class,'find']);
    Route::post('/create',[OrderController::class,'create'])->name('order_create');
    Route::delete('/{id}',[OrderController::class,'delete'])->name('order_delete');
});

Route::prefix('author')->group(function(){
    Route::get('/',[AuthorController::class,'index'])->name('author_home');
    Route::get('/cadastro',[AuthorController::class,'cadastro'])->name('author_cadastro');
    Route::get('/search',[AuthorController::class,'search'])->name('author_search');
    Route::get('/details/{id}',[AuthorController::class,'details'])->name('author_details');
    Route::get('/edit/{id}',[AuthorController::class,'edit']);
    Route::get('/{id}',[AuthorController::class,'find']);
    Route::post('/create',[AuthorController::class,'create'])->name('author_create');
    Route::delete('/{id}',[AuthorController::class,'delete'])->name('author_delete');
});
