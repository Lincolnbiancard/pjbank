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

Route::get('/', function(){
    return redirect('/init');
});

Route::get('/init', 'ProductController@init');

Route::get('formproduct', 'ProductController@formProduct');
Route::post('store', 'ProductController@store');

Route::post('boleto', 'ProductController@generateBillet');

Route::get('boleto', 'ProductController@boleto');


Route::get('/grid/{param?}', 'ProductController@grid')->name('grid');
Route::post('/grid/{param?}', 'ProductController@gridPost');

Route::put('/update/{codigoProduto}', 'ProductController@update');
Route::get('/show/{codigoProduto}', 'ProductController@show');



Route::post('search/{param}', 'ProductController@search');



Route::delete('/destroy/{codigoProduto}', 'ProductController@destroy');

Route::get('teste/{money}', 'ProductController@teste');




