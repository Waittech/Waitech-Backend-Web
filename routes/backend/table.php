<?php

Route::group([
  'namespace' => 'Table',
  'as'        => 'table.',
  'prefix'    => 'tables',
], function () {
  Route::get('/', 'TableController@index')->name('index');

  Route::get('/create', 'TableController@create')->name('create');
  Route::post('/', 'TableController@store')->name('store');

  Route::get('/{table}/edit', 'TableController@edit')->name('edit');
  Route::post('/{table}', 'TableController@update')->name('update');

  Route::get('/{table}/destroy', 'TableController@destroy')->name('destroy');

  Route::get('/{table}/qr', 'TableController@qr')->name('qr');
});
