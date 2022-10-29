<?php

namespace App\Http\Controllers\Frontend\Theme\form_elements;

use App\Http\Controllers\Controller;

class InputGroups extends Controller
{
  public function index()
  {
    return view('theme.content.form-elements.forms-input-groups');
  }
}
