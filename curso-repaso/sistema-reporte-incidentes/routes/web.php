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
    return view('welcome');
});

// ESTAS ESTAN CONTENIDAS EN Route::resources
//Route::get('/clientes', [\App\Http\Controllers\ClientesController::class,'index']); // (ruta, [clase, metodo a ejecutar en la clase]);
//Route::get('/clientes/create', [\App\Http\Controllers\ClientesController::class, 'create']);
//Route::post('/clientes', [\App\Http\Controllers\ClientesController::class, 'store']);
//Route::get('/clientes/:id', [\App\Http\Controllers\ClientesController::class, 'show']); // :id == es el ID que llega por la ruta (routes params). Tiene que matchear con el param del method
//Route::get('/clientes/:id/edit', [\App\Http\Controllers\ClientesController::class, 'edit']);
//Route::put('/clientes/:id', [\App\Http\Controllers\ClientesController::class, 'update']);
//Route::delete('/clientes/:id', [\App\Http\Controllers\ClientesController::class, 'destroy']);

Route::resource('clientes', \App\Http\Controllers\ClientesController::class);

//Route::get('/', function (){
//    return "Hola";
//});
//
//Route::get('/saludar', function (){
//    return "Hola carlitos";
//});
//
//Route::get("/saludar2", function(){ // callback funciton => asociada a la ruta y se ejecuta cada vez que llega una peticionm a esa ruta
//    return "Hola Juanca";
//});
//
