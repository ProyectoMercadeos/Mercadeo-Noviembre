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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Aqui se agrupan las rutas por lo permisos que se le quiere dar
Route::group([ 'middleware' => ['auth','is_admin']], function ()
{
	//rutas para el recurso ciudades 
	Route::resource('Ciudades','CiudadesController');
	//una nueva para eliminar registros con el metodo get
	Route::get('Ciudades/destroy/{id}', ['as' => 'Ciudades/destroy', 'uses'=>'CiudadesController@destroy']);
	//ruta para realizar busqueda de registrosCiudadesController
	Route::post('Ciudades/search', ['as' => 'Ciudades/search', 'uses'=>'CiudadesController@search']);


	//rutas para el recurso Empresas
	Route::resource('Empresas','EmpresasController');
	//una nueva para eliminar registros con el metodo get
	Route::get('Empresas/destroy/{id}', ['as' => 'Empresas/destroy', 'uses'=>'EmpresasController@destroy']);
	//ruta para realizar busqueda de registros
	Route::post('Empresas/search', ['as' => 'Empresas/search', 'uses'=>'EmpresasController@search']);

	//rutas para el recurso Encuestas
	Route::resource('Encuestas','EncuestasController');
	//una nueva para eliminar registros con el metodo get
	Route::get('Encuestas/destroy/{id}', ['as' => 'Encuestas/destroy', 'uses'=>'EncuestasController@destroy']);
	//ruta para realizar busqueda de registros
	Route::post('Encuestas/search', ['as' => 'Encuestas/search', 'uses'=>'EncuestasController@search']);

	//rutas para el recurso Localidades
	Route::resource('Localidades','LocalidadesController');
	//una nueva para eliminar registros con el metodo get
	Route::get('Localidades/destroy/{id}', ['as' => 'Localidades/destroy', 'uses'=>'LocalidadesController@destroy']);
	//ruta para realizar busqueda de registros
	Route::post('Localidades/search', ['as' => 'Localidades/search', 'uses'=>'LocalidadesController@search']);


	//rutas para el recurso Cuestionario
	Route::resource('Cuestionario','CuestionarioController@index');
	//una nueva para eliminar registros con el metodo get
	Route::get('Cuestionario/destroy/{id}', ['as' => 'Cuestionario/destroy', 'uses'=>'CuestionarioController@destroy']);
	//ruta para realizar busqueda de registros
	Route::post('Cuestionario/search', ['as' => 'Cuestionario/search', 'uses'=>'CuestionarioController@search']);

	//rutas para el recurso Cuestionario
	Route::resource('GoogleMaps','GoogleMapsController@index');
	//una nueva para eliminar registros con el metodo get
	Route::get('GoogleMaps/destroy/{id}', ['as' => 'GoogleMaps/destroy', 'uses'=>'GoogleMapsController@destroy']);
	//ruta para realizar busqueda de registros
	Route::post('GoogleMaps/search', ['as' => 'GoogleMaps/search', 'uses'=>'GoogleMapsController@search']);

});

//rutas del cliente
Route::group([ 'middleware' => ['auth','is_client']], function ()
{

	
});

//rutas del auditor
Route::group([ 'middleware' => ['auth','is_audit']], function ()
{	
	
});

//rutas del analista
Route::group([ 'middleware' => ['auth','is_analista']], function ()
{
	//rutas para el recurso DOFA
	Route::resource('DOFA','DOFAController');
	//una nueva para eliminar registros con el metodo get
	Route::get('DOFA/destroy/{id}', ['as' => 'DOFA/destroy', 'uses'=>'DOFAController@destroy']);
	//ruta para realizar busqueda de registros
	Route::post('DOFA/search', ['as' => 'DOFA/search', 'uses'=>'DOFAController@search']);

	//rutas para el recurso Recomendaciones
	Route::resource('Recomendaciones','RecomendacionesController');
	//una nueva para eliminar registros con el metodo get
	Route::get('Recomendaciones/destroy/{id}', ['as' => 'Recomendaciones/destroy', 'uses'=>'RecomendacionesController@destroy']);
	//ruta para realizar busqueda de registros
	Route::post('Recomendaciones/search', ['as' => 'Recomendaciones/search', 'uses'=>'RecomendacionesController@search']);
});