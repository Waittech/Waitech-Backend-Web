<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Http\Requests\UserStoreRequest;
use App\Models\Access\User;
use Illuminate\Support\Arr;

class RegisterController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest');
  }

  public function showRegisterForm()
    {
      return view('app.frontend.register');
    }

    public function register(UserStoreRequest $request)
    {
      $user = User::create(Arr::collapse([$request->validated(), ['api_token' => Str::random(60)]]));

      return $user;
    }
}
