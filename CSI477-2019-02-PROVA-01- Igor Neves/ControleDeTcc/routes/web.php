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

Route::get('/','HomeController@index' )->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index');
Auth::routes();



Route::get('/sobre', ['as' => 'sobre', 'uses' => 'HomeController@sobre']);
Route::post('/pesquisa', ['as' => 'pesquisa', 'uses' => 'ProfessorController@pesquisa']);
Route::get('/relatorioTCC', ['as' => 'relatorio.tcc', 'uses' => 'ProjetoController@index']);





Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'PageController@upgrade']);
		
		Route::get('/relatorios', ['as' => 'relatorios', 'uses' => 'HomeController@relatorios']);
		Route::get('/relatorioAluno', ['as' => 'relatorio.aluno', 'uses' => 'AlunoController@index']);
		Route::get('/relatorioProfessor', ['as' => 'relatorio.professor', 'uses' => 'ProfessorController@index']);
		Route::get('/incluirTCC', ['as' => 'relatorio.incluir', 'uses' => 'ProjetoController@addIndex']);
		Route::get('/adicionar', ['as' => 'relatorio.adicionar', 'uses' => 'ProjetoController@adicionar']);
		Route::post('/salvarTCC', ['as' => 'relatorio.salvar', 'uses' => 'ProjetoController@salvar']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});


