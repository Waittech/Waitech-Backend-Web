<?php

Route::group([
  'namespace' => 'User',
  'as'        => 'user.',
  'prefix'    => 'users',
], function () {
  Route::get('/', 'UserController@index')->name('index');

  Route::group(['middleware' => ['can:manage accounts']], function () {
    Route::get('/create', 'UserController@create')->name('create');
    Route::post('/', 'UserController@store')->name('store');

    Route::get('/{user}/edit', 'UserController@edit')->name('edit');
    Route::post('/{user}', 'UserController@update')->name('update');

    Route::get('/{user}/destroy', 'UserController@destroy')->name('destroy');
  });
});

