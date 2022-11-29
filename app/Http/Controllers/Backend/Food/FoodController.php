<?php

namespace App\Http\Controllers\Backend\Food;

use App\Http\Controllers\Controller;
use App\Models\Food\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
      $company_id = session()->get('company_id');
      $foods = Food::where('company_id', $company_id)->paginate(1);

      return view('app.backend.food.list', compact('foods'));
    }

    public function edit(Food $food)
    {
      $company_id = session()->get('company_id');
      $food = Food::where('company_id', $company_id)->paginate(1);

      return view('app.backend.food.edit', compact('food'));
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
