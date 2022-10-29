<?php

namespace App\Http\Controllers\Frontend\Theme\layouts;

use App\Http\Controllers\Controller;

class Blank extends Controller
{
  public function index()
  {
    return view('theme.content.layouts-example.layouts-blank');
  }
}
