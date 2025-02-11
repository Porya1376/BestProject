<?php

namespace App\Enums;

enum UserTypeEnum: string
{
    case USER_TYPE_MEMBER = 'member';
    case USER_TYPE_ADMIN = 'admin';
}
