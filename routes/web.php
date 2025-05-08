<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EstadisticasController;
use App\Http\Controllers\InventarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('inventarios', InventarioController::class);
Route::resource('clientes', ClienteController::class);
Route::get('/estadisticas', [EstadisticasController::class, 'index'])->name('estadisticas.index');
