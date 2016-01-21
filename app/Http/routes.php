<?php

Route::group(array('prefix' => '/','middleware' => 'auth'), function()
{
	Route::get('home','HomeController@index');
	Route::get('/', function () {return Redirect('auth/login');});
	Route::get('logout','HomeController@destroy');
	Route::get('clientes/delete/{id}','ClientesController@destroy');
	Route::get('equipments/delete/{id}','EquipmentsController@destroy');

        Route::get('delete/{id}','UsersController@delete');
	Route::resource('home','ClientesController@mostrar');
	Route::resource('clientes/create','ClientesController@create');
	Route::resource('clientes','ClientesController');
	Route::get('clientes/edit/{id}','ClientesController@edit');
	Route::get('clientes/ver/{id}','ClientesController@ver');
	Route::resource('equipments','EquipmentsController');
	Route::get('acceso','ClientesController@acceso');
	Route::group(['middleware' => 'role:bb-admin'], function()
	{

		Route::resource('users','UsersController');

	});


});


Route::controllers([
'auth'=>'Auth\AuthController',
'password'=>'Auth\PasswordController'
]);
