<?php

namespace App\Http\Controllers\Backend\Menu;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\MenuStoreRequest;
use App\Models\Food\Category;
use App\Models\Food\Food;
use App\Models\Food\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Request $request)
    {
      $company_id = session()->get('company_id');
      $menus = Menu::where('company_id', $company_id)->get()->groupBy('category_id');

      return view('app.backend.menu.list', compact('menus'));
    }

    public function create(Request $request)
    {
      $company_id = session()->get('company_id');
      $categories = Category::all();
      $foods = Food::where('company_id', $company_id)->get();

      return view('app.backend.menu.create', compact('categories', 'foods'));
    }

    public function store(MenuStoreRequest $request)
    {
      $data = $request->validated();
      $data['company_id'] = session()->get('company_id');

      Menu::create($data);

      return response()->redirectToRoute('backend.menu.index')->with('success', 'Ürün başarıyla menüye eklenmiştir.');
    }

    public function destroy(Menu $menu)
    {
      if ($menu->company_id != session()->get('company_id')) {
        return back()->withErrors([
          'error_message' => 'Ürün silinirken hata!',
        ]);
      }

      $menu->delete();

      return back()->withErrors([
        'success_message' => 'Ürün menüden başarıyla kaldırıldı.',
      ]);
    }
}
