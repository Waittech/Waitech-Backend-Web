<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function showLoginForm()
    {
      return view('app.frontend.login');
    }

    public function login(Request $request)
    {
      if (!Auth::attempt($request->only('email', 'password'))) {
        $request->session()->regenerate();
        return 'giriş yapıldı';
      }

      return back()->withErrors([
        'message' => trans('auth.failed'),
      ])->onlyInput('email');
    }

}
