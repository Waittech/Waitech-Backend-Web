<?php

namespace App\Http\Controllers\Frontend\Theme\dashboard;

use App\Http\Controllers\Controller;

class Ecommerce extends Controller
{
    public function index(){
      return view('theme.content.dashboard.dashboards-ecommerce');
    }
}
