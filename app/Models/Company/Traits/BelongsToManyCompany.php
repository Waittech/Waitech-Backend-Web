<?php

namespace App\Models\Company\Traits;

trait BelongsToManyCompany
{

    /**
     * Boot the trait. Will apply any scopes currently set, and
     * register a listener for when new models are created.
     */
    public function scopeBelongsToCompany($query)
    {
        if (!session()->get('company_id')) {
            return;
        }

        $relation = $this->companies();

        $query->join(
            $relation->getTable(),
            $relation->getQualifiedParentKeyName(),
            $relation->getQualifiedForeignPivotKeyName())
              ->where($relation->getQualifiedRelatedPivotKeyName(), session()->get('company_id'));
    }
}
