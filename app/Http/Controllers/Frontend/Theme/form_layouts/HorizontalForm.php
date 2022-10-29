<?php

namespace App\Http\Controllers\Frontend\Theme\form_layouts;

use App\Http\Controllers\Controller;

class HorizontalForm extends Controller
{
  public function index()
  {
    return view('theme.content.form-layout.form-layouts-horizontal');
  }
}
