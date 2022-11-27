<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Models\Access\Role;
use App\Models\Company\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
      $data = $request->validated();

      $user = User::create(
        Arr::collapse([$data, ['api_token' => Str::random(60)]])
      );

      $company = Company::create([
        'owner_user_id' => $user->id,
        'name' => $data['company_name'],
        'country_id' => 212,
      ]);

      $company->users()->attach($user);
      $adminRole             = Role::findByName('admin');
      $adminRole->company_id = $company->id;
      $user->assignRole($adminRole);

      if ($user && auth()->attempt(['email' => $data['email'], 'password' => $data['password']])) {
        $request->session()->regenerate();

        session()->put('company_id', $company->id);

        return redirect()->route('backend.index');
      }

      return back()->withErrors([
        'error_message' => trans('auth.failed_register'),
      ]);
    }
}
