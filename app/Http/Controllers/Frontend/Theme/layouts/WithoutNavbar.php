<?php

namespace App\Http\Controllers\Frontend\Theme\layouts;

use App\Http\Controllers\Controller;

class WithoutNavbar extends Controller
{
  public function index()
  {
    return view('theme.content.layouts-example.layouts-without-navbar');
  }
}
