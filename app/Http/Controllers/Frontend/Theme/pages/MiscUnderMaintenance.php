<?php

namespace App\Http\Controllers\Frontend\Theme\pages;

use App\Http\Controllers\Controller;

class MiscUnderMaintenance extends Controller
{
  public function index()
  {
    return view('theme.content.pages.pages-misc-under-maintenance');
  }
}
