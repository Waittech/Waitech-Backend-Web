<?php

namespace App\Models\Order;

use App\Models\Order\Traits\OrderAttributes;
use App\Models\Order\Traits\OrderMethods;
use App\Models\Order\Traits\OrderRelationships;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use OrderMethods, OrderAttributes, OrderRelationships;

    protected $fillable = [
      'company_id',
      'table_id',
      'user_id',
      'note',
      'total_price',
      'status',
    ];
}
