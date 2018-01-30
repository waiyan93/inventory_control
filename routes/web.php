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

Route::resource('products', "ProductsController");
Route::resource('categories', "CategoriesController");

Route::get('market', "MarketController@index");
Route::get('market/categories/{id}', "MarketController@showProducts");
Route::get('market/products/{id}', "MarketController@showDetails");

Route::get('cart', "CartController@index");
Route::post('cart/add/{id}', "CartController@addItem");
Route::get('cart/remove/{id}', "CartController@remove");
Route::get('cart/clear', "CartController@clear");

Route::get('/', function(){
	return redirect('market');
});
