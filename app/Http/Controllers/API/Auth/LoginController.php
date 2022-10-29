<?php

namespace App\Http\Controllers\API\Auth;

use App\Helpers\JsonResponse;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

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
}
