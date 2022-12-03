<?php

namespace App\Models\Food;

use App\Models\Company\Traits\BelongsToCompany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory, BelongsToCompany;

    protected $table = 'foods';

    protected $casts = [
      'sales_price' => 'float',
    ];

    public function getStatusTextAttribute() {
      return $this->status ? 'Aktif' : 'Pasif';
    }
}
