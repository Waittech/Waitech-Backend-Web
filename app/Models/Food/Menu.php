<?php

namespace App\Models\Food;

use App\Models\Company\Traits\BelongsToCompany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory, BelongsToCompany;

    public $timestamps = false;

    protected $fillable = [
        'company_id',
        'category_id',
        'food_id',
      ];

    public function category()
    {
      return $this->belongsTo(Category::class);
    }

    public function food()
    {
      return $this->belongsTo(Food::class);
    }

    public function scopeActive($query)
    {
      return $query
        ->join('foods', 'foods.id', '=', 'menus.food_id')
        ->where('foods.status', 1)
        ->get();
    }
}
