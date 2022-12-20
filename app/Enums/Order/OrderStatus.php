<?php

namespace App\Enums\Order;

use App\Enums\AbstractEnum;

final class OrderStatus extends AbstractEnum
{
    const NEW                   = 0;
    const PREPARING             = 1;
    const PREPARED              = 2;
    const DELIVERED             = 3;
    const CANCELED_BY_COMPANY   = 4;
    const CANCELED_BY_USER      = 5;
}
