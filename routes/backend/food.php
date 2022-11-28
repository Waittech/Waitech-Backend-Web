<?php

Route::group([
  'namespace' => 'Food',
  'as'        => 'food.',
  'prefix'    => 'food',
], function () {
  Route::get('/list', 'FoodController@list')->name('list');
});
