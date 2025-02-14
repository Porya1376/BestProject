<?php

namespace App\Enums;

enum ProductTypeEnum: string
{
    case PRODUCT_TYPE_TV = 'tv';
    case PRODUCT_TYPE_REFRIGERATOR = 'refrigerator';
    case PRODUCT_TYPE_AIR_CONDITIONER = 'air_conditioner';
    case PRODUCT_TYPE_WASHING_MACHINE = 'washing_machine';
    case PRODUCT_TYPE_DISHWASHER = 'dishwasher';
    case PRODUCT_TYPE_IRON = 'iron';
}
