<?php

namespace App\Http\Controllers\Frontend\Theme\extended_ui;

use App\Http\Controllers\Controller;

class PerfectScrollbar extends Controller
{
  public function index()
  {
    return view('theme.content.extended-ui.extended-ui-perfect-scrollbar');
  }
}
