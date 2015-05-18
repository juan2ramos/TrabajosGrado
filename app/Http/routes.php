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
Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
/* Students */
Route::get('inscripcion-estudiantes', 'StudentController@index');
Route::post('inscripcion-estudiantes', 'StudentController@create');
Route::get('opciones-propuesta', 'OptionController@show');
Route::post('opciones-propuesta', 'ProjectController@create');
Route::get('subir-propuesta', 'ProjectController@index');
Route::post('subir-propuesta', 'ProjectController@openProject');
Route::get('consultar-resultados', 'ProjectController@stateStudent');

/* Researcher*/
Route::get('opciones-grado', 'OptionController@open');
Route::post('opciones-grado', 'OptionController@openSubmit');
Route::get('abrir-convocatoria', 'CallController@open');
Route::post('abrir-convocatoria', 'CallController@openSubmit');
Route::get('listado-inscritos', 'ProjectController@listRegistered');
Route::post('listado-inscritos', 'ProjectController@listRegisteredPost');
Route::get('resultados', 'ProjectController@results');
Route::get('historicos', 'ProjectController@historical');
Route::post('historicos', 'ProjectController@historicalPost');
Route::get('estadisticas', 'ProjectController@statistics');
Route::get('seguimiento-proyectos', 'ProjectController@monitoring');


Route::get('optionChange', 'OptionController@description');
Route::post('seguimiento', 'ProjectController@editPost');
Route::get('edit/{id}', ['as' => 'editProject', 'uses' => 'ProjectController@edit']);

Route::get('fileentry/get/{filename}', [
    'as' => 'document', 'uses' => 'ProjectController@getDocument']);


