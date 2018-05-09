<?php

use App\Note;
use App\aprobacion;

Route::get('/',function(){
	return view('auth.login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/notes/create', 'PaginasController@create');







Route::get('/notes/create', 'PaginasController@create');

Route::get('/seguimiento','PaginasController@seguimiento');
	Route::get('/liquidacion','PaginasController@seguimiento');
	Route::get('/NuevaComision','PaginasController@NuevaComision');
	Route::get('/aprobacion', 'AprobacionController@index');



Route::get('/iniciar-sesion', function(){

	return 'login';

})->name('mipagina');






