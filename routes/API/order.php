<?php

Route::group([
  'namespace' => 'Order',
  'prefix'     => 'orders',
  'middleware' => ['auth:api'],
], function () {
  Route::get('/', 'OrderController@index')->name('index');
  Route::post('/', 'OrderController@store')->name('store');
  Route::get('/{order}', 'OrderController@show')->name('show');
});
