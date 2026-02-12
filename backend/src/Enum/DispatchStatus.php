<?php

namespace App\Enum;

enum DispatchStatus: string
{
    case PLANNED = 'planned';
    case EN_ROUTE = 'en_route';
    case UNLOADING = 'unloading';
    case VALIDATED = 'validated';
    case REJECTED = 'rejected';
}
