<?php

namespace App\Http\Controllers\Frontend\Theme\pages;

use App\Http\Controllers\Controller;

class MiscError extends Controller
{
  public function index()
  {
    return view('theme.content.pages.pages-misc-error');
  }
}
