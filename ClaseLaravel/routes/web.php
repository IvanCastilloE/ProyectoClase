<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Notas;

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

Route::get('notas', 'App\Http\Controllers\NotasController@index') ->name('notas.index');

Route::get('agregar', 'App\Http\Controllers\NotasController@agregar');

Route::get('notas/{id}/editar', 'App\Http\Controllers\NotasController@editar')->name('notas.edit');

Route::put('notas/{notas}/editar', 'App\Http\Controllers\NotasController@update')->name('notas.update');

Route::post('crear', 'App\Http\Controllers\NotasController@crear')->name('notas.store');

Route::delete('notas/{id}', 'App\Http\Controllers\NotasController@destroy')->name('notas.destroy');

/*Route::get('notas/{id}/detalle', function($id) {
    return 'Ver los detalles de la nota: '.$id;
});


Route::get('notas/nueva', function() {
    return 'Aqui agregamos nuevas notas';
});
*/