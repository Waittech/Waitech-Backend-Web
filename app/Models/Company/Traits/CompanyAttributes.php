<?php

namespace App\Models\Company\Traits;

use Illuminate\Support\Facades\Storage;

trait CompanyAttributes
{
    public function getStorageUrlAttribute()
    {
        return Storage::disk('company')->url($this->id);
    }
}
