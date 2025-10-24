<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZonaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/zonas', [zonaController::class, 'obtenerZonas']);

Route::get('/zona/{idzona}', [zonaController::class, 'obtenerZona']);

Route::get('/zonaspais/{idpais}', [zonaController::class, 'obtenerZonaPais']);

Route::post('/nuevazona', [zonaController::class, 'crearZona']);
