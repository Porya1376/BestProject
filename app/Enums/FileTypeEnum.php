<?php

namespace App\Enums;

enum FileTypeEnum: string
{
    case FILE_TYPE_IMAGE = 'image';
    case FILE_TYPE_FILE = 'file';
    case FILE_TYPE_VIDEO = 'video';
}
