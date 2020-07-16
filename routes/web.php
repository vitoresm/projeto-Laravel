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
    return view('index2');
});




Route::group(['middleware' => ['auth']], function(){

    Route::prefix('admin')->namespace('Admin')->name('admin.')->group(function(){
   
        Route::resource('products', 'ProductController');

        Route::resource('cliente', 'ClientController');

        Route::resource('pedido', 'PedidoController');

        Route::get('pedidoproduto/{id_pedido}/{id_cliente}', 'PedidoController@pedidoUpdate')->name('pedidoproduto');

        Route::post('pedidoproduto/destroy/{id}/{id_pedido}/{id_cliente}', 'PedidoController@pedidoProdutoDestroy')->name('pedidoprodutodelete');
       //caso eu nao use javascrpt
     });

     Route::get('/inicio', 'HomeController@index')->name('site');

  });
  

  Auth::routes();

  
  
