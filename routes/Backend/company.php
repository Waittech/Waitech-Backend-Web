<?php

Route::group([
  'namespace' => 'Company',
  'as'        => 'company.',
  'prefix'    => 'company',
], function () {
  Route::get('/', 'CompanyController@index')->name('index');
});
