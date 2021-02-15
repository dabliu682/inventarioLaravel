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

Route::GET('/', function () {
    return view('welcome');
});

Auth::routes();

Route::GET('/home', 'HomeController@index')->name('home');


Route::GET('/clientes', 'clienteController@index')->name('clientes.index');
Route::POST('/clientes/store', 'clienteController@store')->name('cliente.store');
Route::POST('/clientes/{idCliente}/update', 'clienteController@update')->name('cliente.update');
Route::POST('/clientes/{idCliente}/delete', 'clienteController@delete')->name('cliente.delete');

Route::GET('/proveedores', 'proveedorController@index')->name('proveedores.index');
Route::POST('/proveedores/store', 'proveedorController@store')->name('proveedores.store');
Route::POST('/proveedores/update', 'proveedorController@update')->name('proveedores.update');
Route::POST('/proveedores/delete', 'proveedorController@delete')->name('proveedores.delete');

Route::GET('/almacen', 'almacenController@index')->name('almacen.index');


Route::POST('/marca/store', 'marcaController@store')->name('marca.store');
Route::DELETE('/marca/delete', 'marcaController@delete')->name('marca.delete');

Route::POST('/estante/store', 'estanteController@store')->name('estante.store');
Route::DELETE('/estante/delete', 'estanteController@delete')->name('estante.delete');

Route::POST('/linea/store', 'lineaController@store')->name('linea.store');
Route::DELETE('/linea/delete', 'lineaController@delete')->name('linea.delete');

Route::POST('/categoria/store', 'categoriaController@store')->name('categoria.store');
Route::DELETE('/categoria/delete', 'categoriaController@delete')->name('categoria.delete');

Route::GET('/inventario', 'inventarioController@index')->name('inventario.index');
Route::POST('/producto/store', 'productoController@store')->name('productos.store');
Route::POST('/producto/update', 'productoController@update')->name('productos.update');
Route::POST('/producto/delete', 'productoController@delete')->name('productos.delete');

Route::GET('/movimientosProveedores', 'movimientosProveedorController@index')->name('movimientosProveedores.index');
Route::POST('/movimientosProveedores/storeCompras', 'movimientosProveedorController@storeCompras')->name('movimientosProveedores.storeCompras');
Route::POST('/movimientosProveedores/storeCreditos', 'movimientosProveedorController@storeCreditos')->name('movimientosProveedores.storeCreditos');
Route::POST('/movimientosProveedores/pagoCuota', 'movimientosProveedorController@pagoCuota')->name('movimientosProveedores.pagoCuota');
Route::GET('/movimientosProveedores/{idCompras}/storePlanCuotas', 'movimientosProveedorController@storePlanCuotas')->name('movimientosProveedores.storePlanCuotas');




