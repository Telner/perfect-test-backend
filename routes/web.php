<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;



/*
Telas para ver o funcionamento sem dados
*/
Route::get('/', 'DashController@index')->name("dash");
Route::resource('produto','ProdutoController');
Route::resource('venda','VendaController');
Route::resource('cliente','ClienteController');




