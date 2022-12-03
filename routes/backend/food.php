<?php

Route::group([
  'namespace' => 'Food',
  'as'        => 'food.',
  'prefix'    => 'foods',
], function () {
  Route::get('/', 'FoodController@index')->name('index');

  Route::get('/create', 'FoodController@create')->name('create');
  Route::post('/', 'FoodController@store')->name('store');

  Route::get('/{food}/edit', 'FoodController@edit')->name('edit');
  Route::post('/{food}', 'FoodController@update')->name('update');

  Route::get('/{food}/destroy', 'FoodController@destroy')->name('destroy');
});
