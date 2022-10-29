<?php

namespace App\Http\Controllers\Frontend\Theme\pages;

use App\Http\Controllers\Controller;

class AccountSettingsNotifications extends Controller
{
  public function index()
  {
    return view('theme.content.pages.pages-account-settings-notifications');
  }
}
