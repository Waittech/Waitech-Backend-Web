<?php

namespace App\Models\Order\Traits;

use App\Enums\Order\OrderStatus;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

trait OrderMethods
{
    public function scopeDailyOrderCount(Builder $query): int
    {
        return $query->whereDate('created_at', Carbon::today())->count();
    }

    public function scopeDailyEarnings(Builder $query)
    {
      return price_format($query
        ->whereNotIn('status', [OrderStatus::CANCELED_BY_COMPANY, OrderStatus::CANCELED_BY_COMPANY])
        ->whereDate('created_at', Carbon::today())
        ->sum('total_price'));
    }

    public function scopeNewOrderCount(Builder $query): int
    {
        return $query->where('status', OrderStatus::NEW)->count();
    }

    public function scopePreparedOrderCount(Builder $query): int
    {
        return $query->where('status', OrderStatus::PREPARED)->count();
    }

    public function scopeDeliveredOrderCount(Builder $query): int
    {
        return $query->where('status', OrderStatus::DELIVERED)->count();
    }
}
