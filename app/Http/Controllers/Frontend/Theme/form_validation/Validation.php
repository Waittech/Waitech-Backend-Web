<?php

namespace App\Http\Controllers\Frontend\Theme\form_validation;

use App\Http\Controllers\Controller;

class Validation extends Controller
{
  public function index()
  {
    return view('theme.content.form-validation.form-validation');
  }
}
