<?php






Auth::routes();


Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/cart', 'HomeController@cart')->name('cart');
Route::get('/remove/{id}', 'HomeController@CartRemove')->name('CartRemove');
Route::post('/update', 'HomeController@CartUpdate')->name('CartUpdate');

Route::post('/at-to-cart', 'HomeController@atToCart')->name('atToCart');


Route::get('/product', 'HomeController@product')->name('product');
Route::get('/productdetail/{id}', 'HomeController@productdetail')->name('productdetail');
Route::post('/reservation', 'HomeController@contact')->name('reservation');


Route::group(['prefix' => 'admin','namespace' => 'Admin' , 'middleware' => 'auth'], function () {
 Route::get('/dashboard','adminController@index' )->name('dashboard'); 
 
  
 Route::resource('item', 'itController');
 Route::resource('category', 'categoryController');
 Route::resource('slide', 'slideController');
 Route::resource('reserve', 'ReservationController');
 Route::resource('size', 'sizeController');

});
 
