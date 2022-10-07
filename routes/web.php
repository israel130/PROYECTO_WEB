<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('newwelcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/inicio', function () {
        return view('dashboard');
    })->name('inicio');
});
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/usuario_pagina', function () {
        return view('usuario_pagina');
    })->name('usuario_pagina');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/agregar_citas', function () {
        return view('agregar_citas');
    })->name('agregar_citas');
});
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/Evaluacion', function () {
        return view('Evaluacion');
    })->name('Evaluacion');
});

Route::get('agregar_evaluacion', [App\Http\Controllers\Carpeta\controllador::class, 'agregar_evaluacion']);
Route::get('eviar_dato', [App\Http\Controllers\Carpeta\controllador::class, 'eviar_dato']);
Route::get('tabla_citas', [App\Http\Controllers\Carpeta\controllador::class, 'tabla_citas']);
Route::get('GRAFICA', [App\Http\Controllers\Carpeta\controllador::class, 'GRAFICA']);
Route::get('tabla_citas_indicvidual', [App\Http\Controllers\Carpeta\controllador::class, 'tabla_citas_indicvidual']);
Route::get('tabla_evaluacion_personal', [App\Http\Controllers\Carpeta\controllador::class, 'tabla_evaluacion_personal']);
Route::get('obtener_nombre_persona', [App\Http\Controllers\Carpeta\controllador::class, 'obtener_nombre_persona']);
Route::get('evaluacion_pasada_individual', [App\Http\Controllers\Carpeta\controllador::class, 'evaluacion_pasada_individual']);
Route::get('eliminar_evaluacion_inf', [App\Http\Controllers\Carpeta\controllador::class, 'eliminar_evaluacion_inf']);