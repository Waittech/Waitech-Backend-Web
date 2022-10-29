<?php

namespace App\Http\Controllers\Frontend\Theme\tables;

use App\Http\Controllers\Controller;

class Basic extends Controller
{
  public function index()
  {
    return view('theme.content.tables.tables-basic');
  }
}
