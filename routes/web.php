<?php


//linking Storage
Route::get('/foo', function () {
    Artisan::call('storage:link');
    });



Auth::routes();


Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/cart', 'HomeController@cart')->name('cart');
Route::get('/remove/{id}', 'HomeController@CartRemove')->name('CartRemove');
Route::post('/update', 'HomeController@CartUpdate')->name('CartUpdate');

Route::post('/at-to-cart', 'HomeController@atToCart')->name('atToCart');
Route::get('/chackOut', 'HomeController@chackOut')->name('chackOut');


Route::get('/product', 'HomeController@product')->name('product');
Route::get('/productdetail/{id}', 'HomeController@productdetail')->name('productdetail');
Route::get('/about', 'HomeController@about')->name('about');
Route::post('/reservation', 'HomeController@contact')->name('reservation');
Route::post('/customer', 'HomeController@customer')->name('customer');


Route::group(['prefix' => 'admin','namespace' => 'Admin' , 'middleware' => 'auth'], function () {
 Route::get('/dashboard','adminController@index' )->name('dashboard'); 
 
  
 Route::resource('item', 'itController');
 Route::resource('category', 'categoryController');
 Route::resource('slide', 'slideController');
 Route::resource('reserve', 'ReservationController');
 Route::resource('size', 'sizeController');
 Route::resource('order', 'ShowOrderController');
 Route::resource('customer', 'ShowCustomerController');

});
 
