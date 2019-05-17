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

Route::get('/', function () {
    return view('welcome');
});
Route::post('/', 'TodoController@login');
Route::get('/Tude/{id}', 'TodoController@Tude');
Route::post('/', 'TodoController@login');
Route::get('/newPadre','TodoController@newPadre');
Route::get('/newAlumno','TodoController@newAlumno');
Route::get('/newProfesor','TodoController@newProfesor');
Route::get('/newGrupo','TodoController@newGrupo');

Route::post('/newPadre','TodoController@storePadre');
Route::post('/newAlumno','TodoController@storeAlumno');
Route::post('/newProfesor','TodoController@storeProfesor');
Route::post('/ ','TodoController@storeGrupo');