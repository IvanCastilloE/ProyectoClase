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

/*
Route::get('/', function () {
    return 'epik';
});

Route::get('/', function () {
    return [
        'clases' => [
            'Instalacion Laravel',
            'Routes laravel',
            'views laravel'
        ]
        ];
});
Route::get('clases', function() {
    return 'Aqui se visualisan todas las clases';
});

Route::get('clases/temas', function() {
    return 'Aqui se visualisan todos los temas de clase';
});
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('notas', function() {
    return view('notas');
});

Route::get('agregar', function() {
    return view('agregar');
});
Route::get('notas/{id}/editar', function($id) {
    return 'Aqui vamos a editar las notas: '.$id;
});

Route::get('notas/{id}/detalle', function($id) {
    return 'Ver los detalles de la nota: '.$id;
});

Route::get('notas/nueva', function() {
    return 'Aqui agregamos nuevas notas';
});
