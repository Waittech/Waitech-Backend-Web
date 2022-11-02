<?php

Route::get('/', 'HomeController@index')->name('index');

Route::group([
  'namespace' => 'Auth',
  'as'        => 'auth.',
], function () {
  Route::get('/login', 'LoginController@showLoginForm')->name('login.form');
  Route::post('/login', 'LoginController@login')->name('login');

  Route::get('/register', 'RegisterController@showRegisterForm')->name('register.form');
  Route::post('/register', 'RegisterController@register')->name('register');

  Route::get('/logout', 'LoginController@logout')->name('logout');
});



