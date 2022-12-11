<?php

namespace App\Http\Controllers\API\Auth;

use App\Helpers\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController
{
  /**
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function login(Request $request)
  {

    if (!Auth::attempt($request->only('email', 'password'))) {
      return response()->json(
        (new JsonResponse)->fail(trans('auth.failed')),
        Response::HTTP_UNAUTHORIZED
      );
    }

    return response()->json(
      (new JsonResponse)->success(['token' => auth()->user()->api_token]),
      Response::HTTP_OK
    );
  }

  public function logout(Request $request)
  {
    $request->user()->forceFill([
      'api_token' => hash('sha256', Str::random(60)),
    ])->save();
  }
}
