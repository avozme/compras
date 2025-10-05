<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CompraController;

Route::apiResource('productos', ProductoController::class)->only(['index', 'store', 'show', 'update', 'destroy']);
Route::apiResource('clientes', ClienteController::class)->only(['index', 'store', 'show', 'update', 'destroy']);
Route::apiResource('compras', CompraController::class)->only(['index', 'store', 'show', 'update', 'destroy']);
