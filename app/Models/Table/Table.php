<?php

namespace App\Models\Table;

use App\Models\Company\Traits\BelongsToCompany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory, BelongsToCompany;

    protected $fillable = [
      'name',
    ];
}
