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
	$provincias = App\Provincia::all();
    return view('welcome',compact('provincias'));
})->name('home');

Route::post('registrar/persona','PersonaController@insert')->name('insert.form');
Route::get('formulario/cuestionario/{id}','PersonaController@formCuestionario')->name('formCuestionario');
Route::post('formulario/insert','PersonaController@inserCuestionario')->name('insertPreguntas');
Route::get('report3/gener4l','PersonaController@reporte')->name('reporteGeneral');
Route::get('report3/print','PersonaController@printReporte')->name('printReporte');
Route::get('select-provincia/{id}','ProvinciaController@selectProvincia');