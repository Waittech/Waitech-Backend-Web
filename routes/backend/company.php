<?php

Route::group([
  'namespace' => 'Company',
  'as'        => 'company.',
  'prefix'    => 'company',
], function () {
  Route::get('/', 'CompanyController@index')->name('index');
  Route::group(['middleware' => ['can:manage settings']], function () {
    Route::post('/', 'CompanyController@update')->name('update');
  });
});
