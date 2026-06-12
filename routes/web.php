<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticuloController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/categorias/{categoria}', [HomeController::class, 'categoria'])->name('categorias.show');
Route::get('/buscar', [ArticuloController::class, 'buscar'])->name('articulos.buscar');
Route::resource('articulos', ArticuloController::class);
