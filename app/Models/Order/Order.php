<?php

namespace App\Models\Order;

use App\Models\Order\Traits\OrderAttributes;
use App\Models\Order\Traits\OrderRelationships;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use OrderAttributes, OrderRelationships;

    protected $fillable = [
      'company_id',
      'table_id',
      'user_id',
      'note',
      'status',
    ];
}
