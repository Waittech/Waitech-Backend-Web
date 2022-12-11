<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Company\StoreUserRequest;
use App\Models\Company\Company;
use App\Models\Company\CompanyHasUser;
use App\Models\Access\User;
use App\Models\Access\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function create()
  {
    $roles=Role::all();
    return view('app.backend.user.create' , compact('roles'));
  }
 

  public function store(StoreUserRequest $request)
  {
    $data = $request->validated();
    $company_id = session()->get('company_id');
    $data['company_id'] = $company_id; 
    $company = Company::find($company_id);
    $user = User::create(
      $data
    );
      $company->users()->attach($user);
    
      $role             = Role::find($data['role_id']);
      $role->company_id = $company->id;
      $user->assignRole($role);
    return back()
        ->with('success', 'Çalışan başarıyla eklendi.');
    
  }

    public function index()
    {
      $company_id = session()->get('company_id');
      $users = Company::find($company_id)->users;
      $roles=Role::all();
      return view('app.backend.user.list', compact('users' , 'roles'));
    }

    public function edit(User $user)
    {
      $roles=Role::all();
      return view('app.backend.user.edit', compact('user' , 'roles'));
    }

    public function update(StoreUserRequest $request, User $user)
    { 
       
      $data = $request->validated();
      $user->update($data);
      
      $role = Role::where('id','=',$request->input('role_id'))->first();
        $user->role_id = $role->id;
        $user->save();
    
      return back()
          ->with('success', 'Çalışan bilgileri başarıyla güncellendi.');
      
    }

    public function destroy(User $user)
    {
      
      $user->delete();

      return back()->withErrors([
        'success_message' => 'Çalışan başarıyla silindi',
      ]);
    }

}
