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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function (){
    return "Hola";
});
// Todas estas rutas equivalen a Route::resources
//Route::get('/clientes', [\App\Http\Controllers\ClientesController::class, 'index']);
//Route::get('/cliente', [\App\Http\Controllers\ClientesController::class, 'create']);
//Route::post('/clientes', [\App\Http\Controllers\ClientesController::class, 'store']);
///*
// * :id es un route param, es dinamico
// * /clientes/3, /clientes/4, etc.
// * Se agarra como parametro ID
// */
//Route::get('/clientes/:id', [\App\Http\Controllers\ClientesController::class, 'show']);
//Route::get('/clientes/:id/edit', [\App\Http\Controllers\ClientesController::class, 'edit']);
//Route::put('/clientes/id', [\App\Http\Controllers\ClientesController::class, 'update']);
//Route::delete('/clientes/:id', [\App\Http\Controllers\ClientesController::class, 'destroy']);

// Ruta que englosa todos los recursos listados previamente
Route::resource('clientes', \App\Http\Controllers\ClientesController::class);
    //->except(['edit', 'update', 'destroy']); Para routear todos excepto...
    //->only(['index']); Para routear un solo
