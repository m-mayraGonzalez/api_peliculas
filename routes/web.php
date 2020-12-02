<!-- Mayra Marcela González Rojas -->
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

Route::get('api/hello', function () {
    return view('welcome');

    Route::get('/api/categorias','CategoriasController@index');
    Route::post('/api/categorias/guardar','CategoriasController@store')->name('guardar');
    Route::put('/api/categorias/actualizar','CategoriasController@update')->name('actualizar');
    Route::delete('/api/categorias/eliminar','CategoriasController@delete')->name('eliminar');

    Route::get('/api/peliculas','PeliculasController@index');
    Route::post('/api/peliculas/guardar','PeliculasController@store')->name('guardar');
    Route::put('/api/peliculas/actualizar','PeliculasController@update')->name('actualizar');
    Route::delete('/api/peliculas/eliminar','PeliculasController@delete')->name('eliminar');

    Route::get('/api/prestamos','PrestamosController@index');
    Route::post('/api/prestamos/guardar','PrestamosController@store')->name('guardar');
    Route::put('/api/prestamos/actualizar','PrestamosController@update')->name('actualizar');
    Route::delete('/api/prestamos/eliminar','PrestamosController@delete')->name('eliminar');

    Route::get('/api/cliente','ClientesController@index');
    Route::post('/api/cliente/guardar','ClientesController@store')->name('guardar');
    Route::put('/api/cliente/actualizar','ClientesController@update')->name('actualizar');
    Route::delete('/api/cliente/eliminar','ClientesController@delete')->name('eliminar');
});
