<?php

namespace App\Http\Controllers\Frontend\Theme\pages;

use App\Http\Controllers\Controller;

class AccountSettingsAccount extends Controller
{
  public function index()
  {
    return view('theme.content.pages.pages-account-settings-account');
  }
}
