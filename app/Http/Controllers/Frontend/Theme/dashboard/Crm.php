<?php

namespace App\Http\Controllers\Frontend\Theme\dashboard;

use App\Http\Controllers\Controller;

class Crm extends Controller
{
  public function index()
  {
    return view('theme.content.dashboard.dashboards-crm');
  }
}
