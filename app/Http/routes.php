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

Route::post('/plusitem/{id}',['as' => 'plusitem','uses'=>'CartController@plusitem']);

Route::post('/minusitem/{id}',['as' => 'minusitem','uses'=>'CartController@minusitem']);

Route::get('/checkout',['as' => 'checkout','uses' => 'PageController@checkout']);

Route::post('/payment',['as' => 'payment','uses' => 'PageController@payment']);

Route::post('/success/{id}',['as' => 'success','uses' => 'PageController@success']);

Route::post('/fail/{id}',['as' => 'fail','uses' => 'PageController@fail']);

Route::post('/cancel/{id}',['as' => 'cancel','uses'=>'PageController@cancel']);

Route::any('/{page?}','PageController@error');

/*Route::any('/{page?}',function(){
  return View::make('errors.404');
})->where('page','.*');*/
