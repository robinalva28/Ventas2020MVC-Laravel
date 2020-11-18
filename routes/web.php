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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('inicio');
});

Route::get('/agregarProducto', function(){
   return view('formAgregarProducto');
});

Route::get('/adminProductos', 'ProductoController@index');

/* PRODUCTOS */

Route::post('/agregarProducto', 'ProductoController@store');
Route::get('/modificarProducto/{id}','ProductoController@edit');
Route::post('/modificarProducto/{id}','ProductoController@update');
Route::get('/eliminarProducto/{id}', 'ProductoController@destroy');

/* COMPRAS */

Route::get('/agregarCompra','CompraController@show');
Route::post('/agregarCompra','CompraController@store');
Route::get('/listadoCompras','CompraController@list');

/*MOVIMIENTOS*/
Route::get('/movimientos',function (){
    return view('movimientos');
});

/*VENTAS*/
Route::post('/agregarVenta','VentaController@store');
Route::get('/agregarVenta','VentaController@show');





