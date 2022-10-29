<?php

namespace App\Http\Controllers\Frontend\Theme\layouts;

use App\Http\Controllers\Controller;

class Container extends Controller
{
  public function index()
  {
    return view('theme.content.layouts-example.layouts-container');
  }
}
