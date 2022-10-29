<?php

namespace App\Http\Controllers\Frontend\Theme\cards;

use App\Http\Controllers\Controller;

class CardBasic extends Controller
{
  public function index()
  {
    return view('theme.content.cards.cards-basic');
  }
}
