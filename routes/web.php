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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('Materias', [
  'uses' => 'MateriasController@index',
  'as' => 'Materias_paht'
]);

Route::post('inscribir', [
  'uses' => 'MateriasController@create',
  'as' => 'inscribir_paht'
]);