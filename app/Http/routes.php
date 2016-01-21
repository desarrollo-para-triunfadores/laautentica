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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/inicio', function () {
    return view('front.partes.index');
});

Route::resource('/','frontHomeController');

Route::get('/contacto', function () {
    return view('front.contacto.index');
});

Route::get('/institucional', function () {
    return view('front.institucional.index');
});

Route::resource('/productos','frontProductosController');

Route::resource('/marcas','frontMarcaController');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
   Route::resource('usuarios','UsersController');
   Route::resource('paises','PaisesController');
   Route::resource('provincias','ProvinciasController');
   Route::resource('localidades','LocalidadesController');
   Route::resource('empresas','EmpresasController');
   Route::resource('tipoproducto','TipoproductoController');
   Route::resource('rubros','RubrosController');
   Route::resource('marcas','MarcasController');
   Route::resource('productos','ProductosController');
   Route::resource('mail','MailController');



   Route::PUT('usuario/{usuarios}', [
    'uses' => 'UsersController@actPass',
    'as' => 'usuario.actpass'
    ]);
});

// Authentication routes...
Route::get('admin/auth/login', [
	 'uses' => 'Auth\AuthController@getLogin',
 	 'as' => 'admin.auth.login'
	 ]);

Route::post('admin/auth/login', [
	 'uses' => 'Auth\AuthController@postLogin',
 	 'as' => 'admin.auth.login'
	 ]);

Route::get('admin/auth/logout', [
	 'uses' => 'Auth\AuthController@getLogout',
 	 'as' => 'admin.auth.logout'
	 ]);

//Restablecer pass

 Route::get('password/email','Auth\PasswordController@getEmail');
 Route::post('password/email','Auth\PasswordController@postEmail');

 Route::get('password/reset/{token}','Auth\PasswordController@getReset');
 Route::post('password/reset','Auth\PasswordController@postReset'); 