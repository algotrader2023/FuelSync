<?php

namespace App\Enum;

enum StationStatus: string
{
    case URGENT = 'urgent';
    case REFILL = "refill";
    case ACCEPTABLE = 'acceptable';
}
