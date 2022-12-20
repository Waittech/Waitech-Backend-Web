<?php

Route::group([
  'namespace' => 'Order',
  'as'        => 'order.',
  'prefix'    => 'orders',
], function () {
  Route::get('/', 'OrderController@index')->name('index');

  Route::get('/{order}/edit', 'OrderController@edit')->name('edit');
  Route::post('/{order}', 'OrderController@update')->name('update');

  Route::get('/{order}/destroy', 'OrderController@destroy')->name('destroy');
});
