<?php

Route::group([
  'namespace' => 'QR',
  'prefix'     => 'qr',
  'middleware' => ['auth:api'],
], function () {
  Route::get('/company/{company}/table/{table}', 'QRController@table')->name('table');
});
