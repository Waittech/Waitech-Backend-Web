<?php

namespace App\Models\Order\Traits;

use App\Enums\Order\OrderStatus;

trait OrderAttributes
{
    public function getStatusTextAttribute(): string
    {
        return match($this->status) {
          OrderStatus::NEW                  => 'Yeni Sipariş',
          OrderStatus::PREPARING            => 'Hazırlanıyor',
          OrderStatus::PREPARED             => 'Hazır',
          OrderStatus::DELIVERED            => 'Teslim Edildi',
          OrderStatus::CANCELED_BY_COMPANY  => 'İptal Edildi (Firma Tarafından)',
          OrderStatus::CANCELED_BY_USER     => 'İptal Edildi (Müşteri Tarafından)',
          default                           => 'Unknown'
        };
    }

    public function getStatusTextsAttribute(): array
    {
        return [
            OrderStatus::NEW                  => 'Yeni Sipariş',
            OrderStatus::PREPARING            => 'Hazırlanıyor',
            OrderStatus::PREPARED             => 'Hazır',
            OrderStatus::DELIVERED            => 'Teslim Edildi',
            OrderStatus::CANCELED_BY_COMPANY  => 'İptal Edildi (Firma Tarafından)',
            OrderStatus::CANCELED_BY_USER     => 'İptal Edildi (Müşteri Tarafından)',
        ];
    }

    public function getStatusColorAttribute(): string
    {
        return match($this->status) {
          OrderStatus::NEW                  => 'secondary',
          OrderStatus::PREPARING            => 'warning',
          OrderStatus::PREPARED             => 'primary',
          OrderStatus::DELIVERED            => 'success',
          OrderStatus::CANCELED_BY_COMPANY  => 'danger',
          OrderStatus::CANCELED_BY_USER     => 'danger',
          default                           => 'light'
        };
    }

    public function getCreatedDateAttribute()
    {
        return $this->created_at->format('m/d/Y');
    }

    public function getCreatedTimeAttribute()
    {
        return $this->created_at->format('H:i:s');
     }

    public function getFormattedPriceAttribute()
    {
        return number_format($this->total_price, 2);
    }

}
