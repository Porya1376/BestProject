<?php

namespace App\Enums;

enum ProductStatusEnum: string
{
    case PRODUCT_STATUS_ACCEPT = 'accept';
    case PRODUCT_STATUS_PENDING = 'pending';
    case PRODUCT_STATUS_REJECT = 'reject';
}
