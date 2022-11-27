<?php

Route::group([
  'prefix'     => 'company',
  'middleware' => ['auth:api'],
], function () {
    Route::get('/', 'Company\CompanyController@index')->name('index');
    Route::get('/{company}', 'Company\CompanyController@show')->name('show');
});
