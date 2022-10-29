<?php

namespace App\Http\Controllers\Frontend\Theme\form_elements;

use App\Http\Controllers\Controller;

class BasicInput extends Controller
{
  public function index()
  {
    return view('theme.content.form-elements.forms-basic-inputs');
  }
}
