<?php
use Illuminate\Support\Facades\Route;
// Importando los controladores
use App\Http\Controllers\VuelosContoller2;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('vuelos', VuelosContoller2::class);

//Route::get('/vuelos/nuevo', [ClienteController::class, 'nuevo']);
//Route::resource('vuelos', ClienteController::class);