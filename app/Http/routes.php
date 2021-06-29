<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('web.index');
});

Route::get('/acerca', function () {
    return view('web.acerca');
});

Route::get('/contacto', function () {
    return view('web.contacto');
});

Route::get('/ayuda', function () {
    return view('web.ayuda');
});

Route::get('/mapa-sitio', function () {
    return view('web.mapa-sitio');
});

Route::get('/gracias', function () {
    return view('web.gracias');
});




Route::resource('almacen/categoria','CategoriaController');
Route::resource('almacen/articulo','ArticuloController');
Route::resource('ventas/cliente','ClienteController');
Route::resource('compras/proveedor','ProveedorController');
Route::resource('compras/ingreso','IngresoController');
Route::resource('ventas/venta','VentaController');
Route::resource('seguridad/usuario','UsuarioController');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/{slug?}', 'HomeController@index');

