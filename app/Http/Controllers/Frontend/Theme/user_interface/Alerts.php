<?php

namespace App\Http\Controllers\Frontend\Theme\user_interface;

use App\Http\Controllers\Controller;

class Alerts extends Controller
{
  public function index()
  {
    return view('theme.content.user-interface.ui-alerts');
  }
}
