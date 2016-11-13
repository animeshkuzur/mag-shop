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

Route::get('/',['as' => 'index','uses' => 'PageController@index']);
Route::get('/blog',['as' => 'blog', 'uses' => 'PageController@blog']);
Route::get('/product/{id}',['as' => 'product', 'uses' => 'PageController@product']);
Route::post('/addproduct',['as' => 'addproduct','uses' => 'CartController@addproduct']);
Route::get('/notify',['as' => 'notify','uses' => 'PageController@notify']);
Route::get('/getproducts',['as' => 'getproducts','uses' => 'CartController@getproducts']);
Route::post('/deleteproduct/{id}',['as' => 'deleteproduct','uses'=>'CartController@deleteproduct']);
Route::any('/{page?}',function(){
  return View::make('errors.503');
})->where('page','.*');
