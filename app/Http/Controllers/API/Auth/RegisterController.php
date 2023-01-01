<?php

namespace App\Http\Controllers\API\Auth;

use App\Helpers\JsonResponse;
use App\Http\Requests\UserStoreRequest;
use App\Http\Resources\UserResource;
use App\Models\Access\User;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class RegisterController
{
  public function register(UserStoreRequest $request)
  {
    $user = User::create(Arr::collapse([$request->validated(), ['api_token' => Str::random(60)]]));

    return response()->json((new JsonResponse())->success( new UserResource($user), Response::HTTP_OK));
  }
}
