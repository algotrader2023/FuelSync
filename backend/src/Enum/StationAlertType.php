<?php

namespace App\Enum;

enum StationAlertType: string
{
    case LOW_STOCK = 'low_stock';
    case VARIANCE = 'variance';
    case ANOMALY = "anomaly";
}
