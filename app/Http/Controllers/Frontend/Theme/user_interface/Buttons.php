<?php

namespace App\Http\Controllers\Frontend\Theme\user_interface;

use App\Http\Controllers\Controller;

class Buttons extends Controller
{
  public function index()
  {
    return view('theme.content.user-interface.ui-buttons');
  }
}
