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

// Route::get('/', function () {
//     return view('homepage');
// });
Route::get('/',['as'=>'site.home','uses'=>'Site\SiteController@index']);

Route::get('/cadastro',['as'=>'site.cadastro','uses'=>'Site\CadastroController@index']);
Route::post('/cadastro/salvar',['as'=>'site.cadastro.salvar','uses'=>'UserController@store']);


Route::get('/login',['as'=>'site.login','uses'=>'Site\LoginController@index']);
Route::get('/login/sair',['as'=>'site.login.sair','uses'=>'Site\LoginController@sair']);
Route::post('/login/entrar',['as'=>'site.login.entrar','uses'=>'Site\LoginController@entrar']);

Route::get('/sobre',['uses'=>'SobreController@index']);

Route::group(['middleware'=>'auth'],function(){    
    
    Route::get('/admin/requets',['as'=>'admin.requets','uses'=>'Admin\RequetController@index']);
    Route::get('/admin/requets/adicionar',['as'=>'admin.requets.adicionar','uses'=>'Admin\RequetController@adicionar']);
    Route::post('/admin/requets/salvar',['as'=>'admin.requets.salvar','uses'=>'Admin\RequetController@salvar']);
    
    Route::get('/admin/requets/editar/{id}',['as'=>'admin.requets.editar','uses'=>'Admin\RequetController@editar']);
    Route::put('/admin/requets/atualizar/{id}',['as'=>'admin.requets.atualizar','uses'=>'Admin\RequetController@atualizar']);
    
    Route::get('/admin/requets/deletar/{id}',['as'=>'admin.requets.deletar','uses'=>'Admin\RequetController@deletar']);

});
