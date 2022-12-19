<?php

namespace App\Http\Controllers\Backend\Food;

use App\Http\Controllers\Controller;
use App\Http\Requests\Food\StoreFoodRequest;
use App\Models\Food\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
  public function create()
  {
    $company_id = session()->get('company_id');
    $foods = Food::where('company_id', $company_id)->paginate(10);
    return view('app.backend.food.create');
  }


  public function store(StoreFoodRequest $request)
  {
    $data = $request->validated();
    $company_id = session()->get('company_id');
    $data['company_id'] = $company_id;

    $food = Food::create(
      $data
    );
    return back()
        ->with('success', 'Ürün başarıyla eklendi.');

  }

    public function index()
    {
      $company_id = session()->get('company_id');
      $foods = Food::where('company_id', $company_id)->paginate(3);

      return view('app.backend.food.list', compact('foods'));
    }

    public function edit(Food $food)
    {

      return view('app.backend.food.edit', compact('food'));
    }

    public function update(StoreFoodRequest $request, Food $food)
    {
      $data = $request->validated();
     $food->update($data);

      return back()
          ->with('success', 'Ürün başarıyla güncellendi.');

    }

    public function destroy(Food $food)
    {
      if ($food->company_id != session()->get('company_id')) {
        return back()->withErrors([
          'error_message' => 'Ürün silinirken hata!',
        ]);
      }

      $food->delete();

      return back()->withErrors([
        'success_message' => 'Ürün başarıyla silindi',
      ]);
    }

}
