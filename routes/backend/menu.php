<?php

Route::group([
  'namespace' => 'Menu',
  'as'        => 'menu.',
  'prefix'    => 'menu',
], function () {
  Route::get('/', 'MenuController@index')->name('index');

  Route::get('/create', 'MenuController@create')->name('create');
  Route::post('/', 'MenuController@store')->name('store');

  Route::get('/{menu}/destroy', 'MenuController@destroy')->name('destroy');
});
