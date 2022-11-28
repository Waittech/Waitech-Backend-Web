<?php

namespace App\Models\Company\Traits;

use App\Models\Company\Company;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

trait BelongsToCompany
{
    /**
     * Boot the trait. Will apply any scopes currently set, and
     * register a listener for when new models are created.
     */
    public static function bootBelongsToCompany()
    {
        static::creating(fn(Model $model) => static::newModel($model));

        static::addGlobalScope(fn(Builder $builder) => static::scopeBelongsToCompany($builder));
    }

    /**
     * Add tenant columns as needed to a new model instance before it is created.
     *
     * @param  Model  $model
     */
    public static function newModel(Model $model)
    {
      $model->setAttribute('company_id', session()->get('company_id'));
        if (!isset($model->company_id) && session()->get('company_id')) {
            $model->setAttribute('company_id', session()->get('company_id'));
        }
    }

    /**
     * Apply company scope to condition
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     */
    public static function scopeBelongsToCompany(Builder $builder)
    {
        if (!session()->get('company_id')) {
            return;
        }

        $builder->where('company_id', '=', session()->get('company_id'));
    }

    /**
     * @return mixed
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
