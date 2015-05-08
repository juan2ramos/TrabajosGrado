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


Route::get('/', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
/* Students */
Route::get('inscripcion-estudiantes','StudentController@index');
Route::get('opciones-propuesta','OptionController@show');
Route::get('subir-propuesta','ProjectController@index');
Route::get('consultar-resultados','ProjectController@stateStudent');

/* Researcher*/
Route::get('opciones-grado','OptionController@open');
Route::get('abrir-convocatoria','CallController@open');
Route::get('listado-inscritos','ProjectController@listRegistered');
Route::get('resultados','ProjectController@results');
Route::get('historicos','ProjectController@historical');
Route::get('estadisticas','ProjectController@statistics');
Route::get('seguimiento-proyectos','ProjectController@monitoring');