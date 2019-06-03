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
			
		Route::resource('asignar', 'ControllerAsignar');
		
		Route::resource('asignarestu', 'ControllerAsignarEstudiante');
	});	

		Route::resource('estudiantes', 'ControllerEstudiantes');

		Route::resource('notas', 'ControllerCalificacion');

		Route::resource('docente', 'ControllerDocente');
			Route::get('docente/{id}/destroy',[
			'uses'	=> 'ControllerDocente@destroy',
			'as'	=> 'admin.asignar.docente.destroy']);			
			Route::get('asignar/docente/inicio',[
			'uses'	=>	'ControllerDocente@inicio',
			'as'	=>	'docente.inicio']);
			Route::get('asignar/docente/menu',[
			'uses'	=>	'ControllerDocente@menu',
			'as'	=>	'docente.menu']);
	
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
