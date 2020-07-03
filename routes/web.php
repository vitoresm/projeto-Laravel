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
    return view('welcome');
});

Route::get('/site', function () {
    return view('index');
});

//Route::group(['middleware' => ['auth']], function(){

    Route::prefix('admin')->namespace('admin')->name('admin.')->group(function(){
   
        Route::resource('products', 'ProductController');

        Route::resource('client', 'clientController');
       
     });
     
  //});
  

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



