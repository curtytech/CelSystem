<?php

use Illuminate\Support\Facades\Route;

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

//Rotas do Modulo Servicos
Route::get('/servicos/create', 'servicosController@create')->name('createServico');   
Route::post('/servicos/create', 'servicosController@store')->name('salvarServico');   
Route::get('/servicos/show', 'ServicosController@show');
Route::get('/servicos/see/{id}', 'servicosController@see')->name('verServico')->middleware('auth');
Route::get('/servicos/edit/{id}', 'servicosController@edit')->name('editarServico')->middleware('auth');
Route::post('/servicos/update/{id}', 'servicosController@update')->name('atualizarServico');
Route::get('/servicos/del/{id}', 'servicosController@destroy')->name('excluirServico')->middleware('auth');

Route::get('/servicos/pdf/{id}', 'pdfController@geraPdf')->name('pdfServico')->middleware('auth');


//Rotas do Modelo Compras

Route::get('/compras/create', 'comprasController@create')->name('createCompra');   
Route::post('/compras/create', 'comprasController@store')->name('salvarCompra');   
Route::get('/compras/show', 'comprasController@show');
// Route::get('/servicos/see/{id}', 'servicosController@see')->name('verServico')->middleware('auth');
// Route::get('/servicos/edit/{id}', 'servicosController@edit')->name('editarServico')->middleware('auth');
// Route::post('/servicos/update/{id}', 'servicosController@update')->name('atualizarServico');
// Route::get('/servicos/del/{id}', 'servicosController@destroy')->name('excluirServico')->middleware('auth');

// Route::get('/servicos/pdf/{id}', 'pdfController@geraPdf')->name('pdfServico')->middleware('auth');

//Rotas do Modelo Produtos



//Rotas do Modelo Vendas



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('welcome');
// })->name('dashboard');

