<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;
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



Route::resource('clientes', ClienteController::class);

//Verb	URI	                Action	    Route Name

//GET	/pedidos	        index	    pedidos.index 
//GET	/pedidos/create	    create	    pedidos.create 

Route::resource('pedidos' , PedidoController::class); 
