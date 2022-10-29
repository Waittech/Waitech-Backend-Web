<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\Str;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
      return view('app.frontend.register');
    }

    public function register(UserStoreRequest $request)
    {
      $user = User::create(Arr::collapse([$request->validated(), ['api_token' => \Illuminate\Support\Str::random(60)]]));

      return $user;
    }
}
