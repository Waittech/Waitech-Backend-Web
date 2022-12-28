<?php

namespace App\Http\Controllers\API\Auth;

use App\Helpers\JsonResponse;
use App\Http\Resources\UserResource;
use App\Models\Access\User;
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

    $user = User::find(auth()->user()->id);

    return response()->json(
      (new JsonResponse)->success( new UserResource($user)),
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
