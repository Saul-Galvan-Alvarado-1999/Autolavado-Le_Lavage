<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\CajerosController;
use  App\Http\Controllers\ServiciosController;
use  App\Http\Controllers\ClientesController;
use  App\Http\Controllers\RegistrosController;
use  App\Http\Controllers\TrabajadoresController;
use  App\Http\Controllers\VehiculosController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
}); //Esto con el fin de que la interfaz de login sea la primera y principal en visualizarse

Route::resource('cajeros', CajerosController::class)->middleware('auth');//lo ultimo es para no tener acceso si no esta logueado
Route::resource('servicios', ServiciosController::class)->middleware('auth');
Route::resource('clientes', ClientesController::class)->middleware('auth');
Route::resource('registros', RegistrosController::class)->middleware('auth');
Route::resource('trabajadores', TrabajadoresController::class)->middleware('auth');
Route::resource('vehiculos', VehiculosController::class)->middleware('auth');

Auth::routes(['register'=>false]);//desactivo la opción de registrar

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


