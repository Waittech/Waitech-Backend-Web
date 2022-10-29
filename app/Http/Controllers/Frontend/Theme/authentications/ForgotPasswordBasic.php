<?php

namespace App\Http\Controllers\Frontend\Theme\authentications;

use App\Http\Controllers\Controller;

class ForgotPasswordBasic extends Controller
{
  public function index()
  {
    return view('theme.content.authentications.auth-forgot-password-basic');
  }
}
