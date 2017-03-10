<?php

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

Route::get('/', 'MainController@home');

Route::resource('clientes','ClientesController');
/*
get/clientes index
post/clientes store
get/clientes/create formulario crear

get/clientes/id mostrar un producto con ID
get/clientes/id/edit
put/patch/clientes/id
delete/cliente/id
*/

Auth::routes();

Route::get('/home', 'HomeController@index');
