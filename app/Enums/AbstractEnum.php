<?php

namespace App\Enums;

use App\Exceptions\GeneralException;
use BenSampo\Enum\Enum;
use BenSampo\Enum\Exceptions\InvalidEnumKeyException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

abstract class AbstractEnum extends Enum
{
    /**
     * Check that the enum contains a specific value
     *
     * @param  mixed  $value
     * @param  bool   $strict  (Optional, defaults to True)
     * @return bool
     */
    public static function hasValue($value, bool $strict = false): bool
    {
        return parent::hasValue($value, $strict);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public static function toSelectCollect(): Collection
    {
        return collect(self::asSelectArray());
    }

    /**
     * @inheritDoc
     */
    protected static function getLocalizedDescription($value): ?string
    {
        $key = self::getKey($value);

        $localizedStringKey = 'labels.' . static::getLabelsKey() . Str::lower($key);

        if (Lang::has($localizedStringKey)) {
            return __($localizedStringKey);
        }

        return null;
    }

    public static function getLabelsKey(): ?string
    {
        return null;
    }
}
