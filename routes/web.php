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
    return view('home');
});

Route::get('login', function () {
    return view('login');
});

Route::get('cadastrar', function () {
    return view('cadastrar');
});
Route::get('admin', function () {
    return view('admin');
});
Route::get('recsenha', function () {
    return view('recsenha');
});
Route::get('cadastrarProdutor', function () {
    return view('cadastrarProdutor');
});
Route::get('recsenhaconfirm', function () {
    return view('recsenhaconfirm');
});
Route::get('perfilProdutor', function () {
    return view('perfilProdutor');
});
Route::get('carrinho', function () {
    return view('carrinho');
});
Route::get('indexProdutor', function () {
    return view('indexProdutor');
});

Route::get('tables', function () {
    return view('tables');
});
Route::get('forms', function () {
    return view('forms');
});
Route::get('chartsProdutor', function () {
    return view('chartsProdutor');
Route::get('pagamento', function () {
    return view('pagamento');
});

Route::post("/cadUsuario", "LoginController@cadLogin");

Route::post("/cadProdutor", "ControllerProdutor@cadProdutor"); //Cria cadastro de Produtor no Banco de Dados.
