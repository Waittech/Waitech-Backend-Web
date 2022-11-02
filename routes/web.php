<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
  'namespace' => 'Frontend',
  'as'        => 'frontend.',
], function () {
  include_route_files(__DIR__ . '/frontend/');
});

Route::group([
  'namespace'  => 'Backend',
  'as'         => 'backend.',
  'prefix'     => 'application',
  'middleware' => ['auth'],
], function () {
  include_route_files(__DIR__ . '/backend/');
});
