<?php

namespace Database\Seeders;

use App\Models\Food\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = $this->data();

      for ($i = 0; $i < count($data); $i++) {
        Category::create([
          'name' => $data[$i]
        ]);
      }
    }

    public function data()
    {
      return [
        'Ana Yemekler',
        'Yan Ürünler',
        'Çorbalar',
        'Burgerler',
        'Pizzalar',
        'Tostlar',
        'Sandviçler',
        'Izgaralar',
        'Dürümler',
        'Dönerler',
        'Balıklar',
        'İçecekler',
        'Soğuk İçecekler',
        'Sıcak İçecekler',
        'Aperatifler',
        'Salatalar',
        'Tatlılar',
      ];
    }
}
