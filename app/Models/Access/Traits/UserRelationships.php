<?php

namespace App\Models\Access\Traits;

use App\Models\Company\Company;
use App\Models\Company\Traits\BelongsToManyCompany;
use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\InteractsWithMedia;

trait UserRelationships
{
    use Notifiable, HasApiTokens, BelongsToManyCompany;

    public function companies(): BelongsToMany
    {
        return $this->belongsToMany(
            Company::class,
            'company_has_users'
        );
    }

    public function ownedCompanies(): HasMany
    {
        return $this->hasMany(Company::class, 'owner_user_id');
    }

}
