<?php

namespace App\Models\Company;

use App\Models\Company\Traits\CompanyAttributes;
use App\Models\Company\Traits\CompanyRelationships;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use CompanyAttributes, CompanyRelationships;

    protected $fillable = [
        'owner_user_id',
        'name',
        'phone_number',
        'description',
        'cover_image',
        'country_id',
        'city_id',
        'district_id',
        'neighborhood_name',
        'street_name',
        'status',
    ];
}
