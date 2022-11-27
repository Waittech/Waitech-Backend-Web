<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Models\Company\CompanyHasUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest')->except(['logout']);
  }

    public function showLoginForm()
    {
      return view('app.frontend.login');
    }

    public function login(Request $request)
    {
      if (Auth::attempt($request->only('email', 'password'))) {
        $request->session()->regenerate();

        $company = CompanyHasUser::where('user_id', auth()->user()->id)->first();

        if (!$company) {
          return redirect()->route('frontend.auth.logout');
        }

        session()->put('company_id', $company->company_id);

        return redirect()->route('backend.index');
      }

      return back()->withErrors([
        'error_message' => trans('auth.failed'),
      ]);
    }

    public function logout(Request $request)
    {
      Auth::logout();

      $request->session()->invalidate();

      $request->session()->regenerateToken();

      return redirect()->route('frontend.index');
    }

}
