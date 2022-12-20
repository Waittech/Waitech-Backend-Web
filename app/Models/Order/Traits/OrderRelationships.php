<?php

namespace App\Models\Order\Traits;

use App\Models\Access\User;
use App\Models\Company\Company;
use App\Models\Company\Traits\BelongsToCompany;
use App\Models\Food\Food;
use App\Models\Table\Table;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait OrderRelationships
{
    public function foods(): BelongsToMany
    {
        return $this->belongsToMany(
          Food::class,
          'order_has_foods'
        )->withPivot('amount');
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function table(): BelongsTo
    {
        return $this->belongsTo(Table::class);
    }
}
