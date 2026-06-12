<?php

use App\Http\Controllers\Api\ArticuloApiController;
use App\Http\Controllers\Api\CategoriaApiController;
use App\Http\Controllers\Api\EtiquetaApiController;
use App\Http\Controllers\Api\MarcaApiController;
use Illuminate\Support\Facades\Route;

Route::get('/articulos/buscar', [ArticuloApiController::class, 'buscar'])->name('api.articulos.buscar');
Route::apiResource('articulos', ArticuloApiController::class)->names([
    'index'   => 'api.articulos.index',
    'store'   => 'api.articulos.store',
    'show'    => 'api.articulos.show',
    'update'  => 'api.articulos.update',
    'destroy' => 'api.articulos.destroy',
]);

Route::get('/categorias', [CategoriaApiController::class, 'index'])->name('api.categorias.index');
Route::get('/categorias/{categoria}', [CategoriaApiController::class, 'show'])->name('api.categorias.show');

Route::get('/marcas', [MarcaApiController::class, 'index'])->name('api.marcas.index');
Route::get('/etiquetas', [EtiquetaApiController::class, 'index'])->name('api.etiquetas.index');
