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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function()
{

	Route::group(['middleware' => 'admin'], function()
	{
		Route::resource('users','ControllerUsers');
		Route::get('users/{id}/destroy', [
			'uses'	=> 'ControllerUsers@destroy', 
			'as'	=> 'admin.users.destroy']);
	});


	Route::resource('notas', 'ControllerCalificacion');

	Route::resource('materias', 'ControllerMaterias');
	Route::get('materias/{id}/destroy',[
		'uses'	=> 'ControllerMaterias@destroy',
		'as'	=> 'admin.materias.destroy']);

	Route::get('notas/{id}/create',[
		'uses'	=> 'ControllerCalificacion@store',
		'as'	=> 'admin.notas.create']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
