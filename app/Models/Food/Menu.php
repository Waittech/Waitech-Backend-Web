<?php

namespace App\Models\Food;

use App\Models\Company\Traits\BelongsToCompany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory, BelongsToCompany;
}
