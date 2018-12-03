<?php


	Route::get('/usuarios', 'UsuariosController@index');

Route::group(['middleware' => 'web'], function(){

		Route::get('/', 'HomeController@index');
		
		Auth::routes();

		Route::get('/home', 'HomeController@index')->name('home');
	
		Route::any('documentos', 'DocumentosController@index');

		Route::any('documentos/novo', 'DocumentosController@novo');
		Route::any('documentos/salvar', 'DocumentosController@salvar');
		Route::any('documentos/detalhe', 'DocumentosController@detalhe');


		Route::any('empresas', 'EmpresasController@index');
		Route::any('empresas/novo', 'EmpresasController@novo');
		Route::any('empresas/salvar', 'EmpresasController@salvar');


});


